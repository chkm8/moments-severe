<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('moments', function (Blueprint $table) {
            $table->increments('id');
            // /$table->integer('member_id');
            //$table->foreign('member_id')->references('id')->on('member')->onDelete('cascade');
            $table->string('message');
            $table->string('image');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
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
        //
        Schema::drop('moments');
    }
}
