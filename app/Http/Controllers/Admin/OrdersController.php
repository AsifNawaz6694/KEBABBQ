<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Product;
use App\N_Order;
use App\n_order_details;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args['orders'] = N_Order::all();        
        return view('admin.orders.index')->with($args);
    }
    public function order_view($id){
        $args['orders'] = N_Order::where('id',$id)->first(); 
        $args['orders_details'] = n_order_details::where('order_id',$id)->get();

        foreach ($args['orders_details'] as $key => $value) {
            $args['product_data'][$value->product_id] = Product::where('id',$value->product_id)->first();
        }
        return view('admin.orders.view')->with($args);
    }


    public function confirm_order($id){        
        DB::table('n__orders')
            ->where('id', $id)
            ->update(['status' => 1]);
       $this->set_session('You Have Successfully Accepted The Order', true);       
        return redirect()->back();
    }
    public function reject_order($id){    
        DB::table('n__orders')
            ->where('id', $id)
            ->update(['status' => 2]);   
        $this->set_session('You Have Successfully Rejected The Order', true);       
        return redirect()->back();
    }
}