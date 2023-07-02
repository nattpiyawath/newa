<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('post_tag')) return;
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag')->nullable();
            $table->integer('post_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->string('lang_code')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
