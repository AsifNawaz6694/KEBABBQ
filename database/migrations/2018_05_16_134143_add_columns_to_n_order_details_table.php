<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToNOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('n_order_details', function (Blueprint $table) {
           $table->string('product_price')->after('quantity'); 
           $table->string('product_name')->after('quantity'); 
           $table->string('total_price_name')->after('quantity'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('n_order_details', function (Blueprint $table) {
           $table->dropColumn('product_price');
           $table->dropColumn('product_name');
           $table->dropColumn('total_price_name');
        });
    }
}
