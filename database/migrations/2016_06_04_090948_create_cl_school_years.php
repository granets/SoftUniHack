<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClSchoolYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_school_years', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('start_year');
            $table->unsignedInteger('end_year');
            $table->string('school_year');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
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
        Schema::drop('cl_school_years');
    }
}
