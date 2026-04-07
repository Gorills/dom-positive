<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('author')->unsigned();
            $table->foreign('author')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->timestamp('published_at')->nullable();
            
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
        Schema::drop('stages');
    }
}
