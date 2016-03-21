<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacebookUserCreation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Players', function(Blueprint $table){
            $table->integer('id')->unique();
            $table->string('facebookName');
            $table->integer('altitude')->unsigned();
            $table->integer('score')->unsigned();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Players');
    }
}
