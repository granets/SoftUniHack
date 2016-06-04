<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClClassLetters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_class_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->char('letter');
            $table->timestamp('deleted_at');
            $table->unsignedInteger('deleted_by')->index();

            //$table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cl_class_letters');
    }
}
