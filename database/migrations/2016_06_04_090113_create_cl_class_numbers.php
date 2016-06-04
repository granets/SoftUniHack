<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClClassNumbers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_class_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_number')->index();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->timestamp('date_deleted')->nullable();

            $table->index('deleted_by');
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
        Schema::drop('cl_class_numbers');
    }
}
