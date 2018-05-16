<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToNOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('n__orders', function (Blueprint $table) {
          $table->tinyInteger('status')->nullable()->default('0')->after('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('n__orders', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
