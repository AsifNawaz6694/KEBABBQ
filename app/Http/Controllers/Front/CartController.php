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
use View;
use Cart;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         ini_set('max_execution_time', 300);   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {   
        ini_set('max_execution_time', 300);
        // dd('12');     
        return view('frontend.cart.cart');
    }   
     public function thankyou(Request $request){
        Cart::destroy();
        return view('frontend.cart.thankyou');
        // dd('thankyou for purchasing');
     }
     public function store(Request $request){
        // dd($request->product_name);
       // return 123;
        $duplicate = Cart::search(function($cartItem,$rowId) use($request){
            return $cartItem->id === $request->product_id;
        });
        // dd($duplicate);
        if ($duplicate->isNotEmpty()) {
            return \Response()->Json([ 'status' => 202,'msg'=>'Item  Already Exist In Cart.']);
        }
        Cart::add($request->product_id, $request->product_name, 1, $request->product_price)->associate('App\Product');

        $count = Cart::instance('default')->count();
       return \Response()->Json([ 'status' => 200, 'count' => $count,'msg'=>'Your Item Is Added To Cart Successfully.']);
        // return redirect()->route('cart');
     }
     public function destroy($id){
        Cart::remove($id);
         $this->set_session('Item Removed From Cart', true);  
        return redirect()->route('cart');
     }

}
