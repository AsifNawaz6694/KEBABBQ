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
     public function store(Request $request){
        // dd($request->product_name);
        $duplicate = Cart::search(function($cartItem,$rowId) use($request){
            return $cartItem->id === $request->product_id;
        });
        // dd($duplicate);
        if ($duplicate->isNotEmpty()) {
            $this->set_session('Item Already Exist In Your To Cart', false);  
                return redirect()->route('dashboard');
        }
        Cart::add($request->product_id, $request->product_name, 1, $request->product_price)->associate('App\Product');

        $this->set_session('Item Added To Cart', true);  
        return redirect()->route('cart');
     }
     public function destroy($id){
        Cart::remove($id);
         $this->set_session('Item Removed From Cart', true);  
        return redirect()->route('cart');

     }

}
