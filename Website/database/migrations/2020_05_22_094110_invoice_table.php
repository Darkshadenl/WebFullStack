<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice', function(Blueprint $table) {
          $table->unsignedBigInteger('table_id')->nullable();
          $table->unsignedBigInteger('user_id')->nullable()->change();

          $table->foreign('table_id')->references('id')->on('table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice', function(Blueprint $table) {
          $table->dropColumn('table_id');
        });
    }
}
