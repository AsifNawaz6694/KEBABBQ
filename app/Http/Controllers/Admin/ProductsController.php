<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args['products'] = Product::all();
        return view('admin.products.index')->with($args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \    Illuminate\Http\Response
     */
    public function create()
    {

        $args['categories'] = Category::all();
        // dd(  $args['categories']);
        return view('admin.products.create')->with($args);     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
       try{
            $p = new Product;
            $p->name = $request->name;
            $p->price = $request->price;            
            $p->category_id = $request->category_id;
            if ($request->hasFile('image')) {
              $image=$request->file('image');
              $filename=time() . '.' . $image->getClientOriginalExtension();
              $location=public_path('public/storage/products-images/'.$filename);
              $p->image=$filename;         
            $p->image = $this->UploadImage('image', Input::file('image'));
            }
            if ($p->save()) {
            $this->set_session('Product Successfully Added.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Product Could Not Be Added.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('products'); 
        }
    }

    public function ImageUploadProduct(Request $request){

        $img_name = '';
        if(Input::file('image')){
        $img_name = $this->UploadImage('image', Input::file('image'));

        Product::where('id' ,'=', $request->product_id)->update([
        'image' => $img_name
        ]);  
        $path = asset('public/storage/products-images/').'/'.$img_name; 
        return \Response()->json(['success' => "Image update successfully", 'code' => 200, 'img' => $path]); 
        $this->set_session('Image Uploaded successfully', true); 
        }else{      
            $this->set_session('Image is Not Uploaded. Please Try Again', false); 
        return \Response()->json(['error' => "Image uploading failed", 'code' => 202]);
        }
    }
     public function UploadImage($type, $file){
        if( $type == 'image'){
        $path = 'public/storage/products-images/';
        }
        $filename = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
        $file->move( $path , $filename);
        return $filename;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_view($id)
    {
        $product = Product::find($id);
        if($product){          
            return view('admin.products.view', compact('product'));
        }
        else{
           $this->set_session('Product Not Found.', false);
            return redirect()->route('products');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $p = Product::find($id);        
        $args['categories'] = Category::all();
        if($p != null){
            $args['product'] = $p;
            return view('admin.products.edit')->with($args);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p =  Product::find($id);
            $p->name = $request->name;
            $p->price = $request->price;           
            $p->category_id = $request->category_id;           
            if ($p->save()) {
            $this->set_session('Product Successfully Updated.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Product Could Not be Updated.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('products'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $p =  Product::find($id);                      
            if ($p->delete()) {
            $this->set_session('Product Successfully Deleted.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Product Could Not be Deleted.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again.'.$e->getMessage(), false);
            return redirect()->route('products'); 
        }
    }

}