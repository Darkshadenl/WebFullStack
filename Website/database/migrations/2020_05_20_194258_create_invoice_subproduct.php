<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceSubproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_subproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->double('price', 8, 2);

            $table->unsignedBigInteger('invoice_product_id');
            $table->foreign('invoice_product_id')->references('id')->on('invoice_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_subproduct');
    }
}
