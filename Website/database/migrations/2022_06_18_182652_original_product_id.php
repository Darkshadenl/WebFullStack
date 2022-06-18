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
        Schema::table('invoice_product', function(Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('SET NULL');
        });

        Schema::table('invoice_subproduct', function(Blueprint $table) {
            $table->unsignedBigInteger('subproduct_id')->nullable();
            $table->foreign('subproduct_id')->references('id')->on('subproduct')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_product', function(Blueprint $table) {
            $table->dropColumn('product_id');
        });
        Schema::table('invoice_subproduct', function(Blueprint $table) {
            $table->dropColumn('subproduct_id');
        });
    }
};
