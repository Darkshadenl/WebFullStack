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
        Schema::create('cms_page', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('cms_page_content', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->enum('language', ['nl', 'en']);
            $table->string('slug');

            $table->unsignedBigInteger('cms_page_id');
            $table->foreign('cms_page_id')->references('id')->on('cms_page');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cms_page');
        Schema::drop('cms_page_content');
    }
};
