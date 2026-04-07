<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('galleries', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('author')->unsigned();
          $table->foreign('author')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->string('image');
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
      Schema::drop('galleries');
    }
}
