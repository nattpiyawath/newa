<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('pages')) return;
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('thumbnail')->nullable();
            $table->string('header_img')->nullable();
            $table->string('title', 250);
            $table->string('slug', 250);
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('layout')->default('master');
            $table->string('type')->default('page');
            $table->string('lang_code')->default('en');
            $table->longText('cus_css')->nullable();
            $table->longText('cus_js')->nullable();
            $table->longText('data')->nullable();
            $table->enum('is_published', ['1', '0']);
            $table->string('parent')->default(0);
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}