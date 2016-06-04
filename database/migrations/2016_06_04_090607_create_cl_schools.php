<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_address');
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
        Schema::drop('cl_schools');
    }
}
