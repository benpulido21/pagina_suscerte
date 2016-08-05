<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news__news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('source');
            $table->date('date_p');
            $table->integer('id_category')->unsigned();
            $table->text('content');

         $table->foreign('id_category')->references('id')->on('news__categories')->onDelete('cascade');
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
        Schema::drop('news__news');
    }
}
