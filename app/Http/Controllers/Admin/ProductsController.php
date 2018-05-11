<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Image;
use File;
use DB;
use Auth;
use App\Product;
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
        return view('admin.products.create');     
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
            $p->name = $request->input('name');
            $p->description = $request->input('description');
            if ($request->hasFile('image')) {
                  $image=$request->file('image');
                  $filename=time() . '.' . $image->getClientOriginalExtension();          
                  $location=public_path('public/storage/products-images/'.$filename);
                  $p->image=$filename;         
            }
            $p->image = $this->UploadImage('image', Input::file('image')); 
            if($p->save()){
                $this->set_session('Product Successfully Added.', true);
            }else{
                $this->set_session('Product Couldnot be added.', false);
            }
            return redirect()->route('products.index');

        }catch(\Exception $e){
            $this->set_session('User Couldnot be Added.'.$e->getMessage(), false);
            return redirect()->route('products.index'); 
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
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}