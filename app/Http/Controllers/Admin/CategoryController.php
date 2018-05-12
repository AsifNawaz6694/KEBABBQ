<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args = array();
        $args['categories'] = Category::all();
        return view('admin.categories.index')->with($args);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.categories.create');
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
            $c = new Category;
            $c->name = $request->name;            
            if ($c->save()) {
            $this->set_session('Category Successfully Added.', true);
            return redirect()->route('categories');
            }else{
                $this->set_session('Category Could Not Be Added.', false);
            return redirect()->route('categories');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('categories'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function category_view($id)
    {
        $category = Category::find($id);
        if($category){          
            return view('admin.categories.view', compact('category'));
        }
        else{
           $this->set_session('Category Not Found.', false);
            return redirect()->route('categories');
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
        $c = Category::find($id);
        if($c != null){
            $args['category'] = $c;
            return view('admin.categories.edit')->with($args);
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
            $c =  Category::find($id);
            $c->name = $request->name;
            if ($c->save()) {
                $this->set_session('Category Successfully Updated.', true);
                return redirect()->route('categories');
            }else{
                $this->set_session('Category Could Not be Updated.', false);
                return redirect()->route('categories');
            }
        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('categories'); 
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
            $p =  Category::find($id);                      
            if ($p->delete()) {
            $this->set_session('Category Successfully Deleted.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Category Could Not be Deleted.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again.'.$e->getMessage(), false);
            return redirect()->route('categories'); 
        }
    }   
}
