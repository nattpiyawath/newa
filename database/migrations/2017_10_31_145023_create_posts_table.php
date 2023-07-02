<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('posts')) return;
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title', 1050);
            $table->string('slug', 250);
            $table->string('type', 100)->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('header_img')->nullable();
            $table->text('detail')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('lang_code')->default('en');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->enum('is_published', ['1', '0']);
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
