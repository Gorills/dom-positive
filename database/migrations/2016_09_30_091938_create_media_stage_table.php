<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_stage', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('stage_id')->unsigned();
            $table->foreign('stage_id')->references('id')->on('stages')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('type');
            $table->string('url');
            
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
        Schema::drop('media_stage');
    }
}
