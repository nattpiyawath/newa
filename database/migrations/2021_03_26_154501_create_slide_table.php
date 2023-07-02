<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('slide')) return;
        Schema::create('slide', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('slide_img')->nullable();
            $table->string('Img_mobile')->nullable();
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->string('slide_link')->nullable();
            $table->string('slide_btn')->nullable();
            $table->integer('order')->nullable();
            $table->string('lang_code')->default('en');
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
        Schema::dropIfExists('slide');
    }
}