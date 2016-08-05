<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news__images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('id_news')->unsigned();
            $table->foreign('id_news')->references('id')->on('news__news')->onDelete('cascade');
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
        Schema::drop('news__images');
    }
}
