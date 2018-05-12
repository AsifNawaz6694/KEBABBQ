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
        return view('frontend.cart.cart');
    }   
}
