<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_sub_product', function (Blueprint $table) {
            $table->dropForeign('product_sub_product_product_id_foreign');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

            $table->dropForeign('product_sub_product_sub_product_id_foreign');
            $table->foreign('sub_product_id')->references('id')->on('subproduct')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_sub_product', function (Blueprint $table) {
            $table->dropForeign('product_sub_product_product_id_foreign');
            $table->foreign('product_id')->references('id')->on('product');

            $table->dropForeign('product_sub_product_sub_product_id_foreign');
            $table->foreign('sub_product_id')->references('id')->on('subproduct');
        });

    }
};
