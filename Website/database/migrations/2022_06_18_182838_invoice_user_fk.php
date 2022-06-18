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
        Schema::table('invoice', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->dropForeign('invoice_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
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
            $table->unsignedBigInteger('user_id')->change();
            $table->dropForeign('invoice_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }
};
