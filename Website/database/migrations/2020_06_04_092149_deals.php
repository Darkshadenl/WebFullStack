<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Deals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal', function(Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->date('start_date');
          $table->date('end_date');
          $table->double('price', 8, 2);
        });

      Schema::create('deal_product', function(Blueprint $table) {
        $table->unsignedBigInteger('deal_id');
        $table->unsignedBigInteger('product_id');

        $table->foreign('deal_id')->references('id')->on('deal')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('deal');
        Schema::drop('deal_product');
    }
}
