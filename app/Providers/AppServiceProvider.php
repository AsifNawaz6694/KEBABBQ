<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Category;
use View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer('*', function ($view) {
                $categories = Category::get();
                $products = array();             
                foreach ($categories as  $value) {                   
                    $products[$value->id]= DB::table('products')->where('products.category_id','=',$value->id)->get();              
                }
                // dd($products);
                View::composer('frontend.partials.navigation', function($view) use($categories,$products)
                {
                    $view->with('categories',$categories)->with('products', $products);
                });             
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
