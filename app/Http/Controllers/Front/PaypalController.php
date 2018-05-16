<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Auth;
use Session;
use Mail;
use App\Category;
use App\Product;
use App\N_Order;
use App\n_order_details;
use View;
use Paypal;
use Redirect;


class PaypalController extends Controller
{
	
	private $_apiContext;

	public function __construct()
	{
		$this->_apiContext = Paypal::ApiContext(
			config('services.paypal.client_id'),
			config('services.paypal.secret'));		
		$this->_apiContext->setConfig(array(
			'mode' => 'sandbox',
			'service.EndPoint' => 'https://api.sandbox.paypal.com',
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => true,
			'log.FileName' => storage_path('logs/paypal.log'),
			'log.LogLevel' => 'FINE'
		));

	}


	public function getCheckout(Request $request)
	{		
		try{
			if (isset($request->first_name) && isset($request->email) && isset($request->phone) && isset($request->address) && isset($request->city) && isset($request->country)){
				$store = new N_Order;
				$store->first_name = $request->first_name;
				$store->last_name = $request->last_name;
				$store->email = $request->email;
				$store->phone = $request->phone;				
				$store->status = 0;				
				$store->address = $request->address;
				$store->city = $request->city;
				$store->region = $request->region;
				$store->postal_code = $request->postal_code;
				$store->country = $request->country;
				$store->save();
				if (isset($request->id)) {
					foreach ($request->id as $key => $value) {
						$product_data = Product::where('id',$value)->first();					
							$store_detail = new n_order_details;					
							$store_detail->order_id = $store->id;
							$store_detail->product_id =  $value;
							$store_detail->product_price =  $product_data['price'];
							$store_detail->total_price_name =  $product_data['price'] * $request->quantity[$key];
							$store_detail->product_name = $product_data['name'];				
							$store_detail->quantity =  $request->quantity[$key];
							$store_detail->save();
					}					
				}							
			}else{
				$this->set_session('Please Provide All The Required Fields', false);  
				return redirect()->back();
			}
		}catch(\Exception $e){
			$this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
			return redirect()->back();                
		}


		// Calculating Payment
		$total_price = 0;
		$cal = n_order_details::where('order_id',$store->id)->get();
		foreach ($cal as $key => $value) {
			$product = Product::where('id',$value->product_id)->first();
			$total_price += $product['price'] * 1;			
		}
			// dd($total_price);
		// dd('stop');

		$payer = PayPal::Payer();
		$payer->setPaymentMethod('paypal');

		$amount = PayPal:: Amount();
		$amount->setCurrency('USD');
		$amount->setTotal($total_price);
		// This is the simple way,
		// you can alternatively describe everything in the order separately;
		// Reference the PayPal PHP REST SDK for details.

		$transaction = PayPal::Transaction();
		$transaction->setAmount($amount);
		$transaction->setDescription('Order Charges');

		$redirectUrls = PayPal:: RedirectUrls();
		$redirectUrls->setReturnUrl(action('Front\PaypalController@getDone'));
		$redirectUrls->setCancelUrl(action('Front\PaypalController@getCancel'));

		$payment = PayPal::Payment();
		$payment->setIntent('Order');
		$payment->setPayer($payer);
		$payment->setRedirectUrls($redirectUrls);
		$payment->setTransactions(array($transaction));

		$response = $payment->create($this->_apiContext);
		$redirectUrl = $response->links[1]->href;
		
		return Redirect::to( $redirectUrl );
	}
	public function getDone(Request $request)
	{
		$id = $request->get('paymentId');
		$token = $request->get('token');
		$payer_id = $request->get('PayerID');
		
		$payment = PayPal::getById($id, $this->_apiContext);

		$paymentExecution = PayPal::PaymentExecution();

		$paymentExecution->setPayerId($payer_id);
		$executePayment = $payment->execute($paymentExecution, $this->_apiContext);

	    // Clear the shopping cart, write to database, send notifications, etc.
	    // Thank the user for the purchase
		
		$this->set_session('You Have Successfully Placed Your Order', true);
		return redirect()->route('thankyou');
	}

	public function getCancel()
	{
	    // Curse and humiliate the user for cancelling this most sacred payment (yours)
		dd('cancel');
		return view('checkout.cancel');
	}

}