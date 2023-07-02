<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('gallery')) return;
        Schema::create('gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('gallery_name', 250);
            $table->unsignedBigInteger('page_id');
            $table->string('translate_id')->nullable();
            $table->string('post_type', 20)->nullable();
            $table->integer('layout')->length(2)->nullable();
            $table->string('lang_code')->default('en');
            $table->longText('data')->nullable();
            $table->enum('is_published', ['1', '0']);
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
        Schema::dropIfExists('gallery');
    }
}
