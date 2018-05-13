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
class FrontController extends Controller
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
    public function dashboard()
    { 

        $args['products'] = Product::get();        
        
        return view('frontend.index')->with($args);
    }

    public function contact_form(Request $request)
    { 
    try {
       if (isset($request->email)) { 
            if (isset($request->name)) {
            $data['name'] = $request->name;
            }
            if (isset($request->email)) {
            $data['email'] = $request->email;
            }
            if (isset($request->subject)) {
            $data['subject'] = $request->subject;
            }
            if (isset($request->message)) {
            $data['message'] = $request->message;
            }      
          Mail::send('emails.info_email',['data'=>$data] , function ($message) use($data){
              $message->from($data['email'], 'Contact Us Email - KEBABBQ');
              $message->to(env('MAIL_USERNAME'))->subject('KEBABBQ - Contact Us Email');
            });         
          return \Response()->Json([ 'status' => 200,'msg'=>'Thank you for your valuable time. we will get back to you as soon as possible.']);
         }else{
           return \Response()->Json([ 'status' => 202, 'msg'=>'Something Went Wrong, Please Try Again!']);
         }  
      } catch (QueryException $e) {
        return \Response()->Json([ 'array' => $e]);
      }       
    }        
    
}
