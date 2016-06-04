<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClClassSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_class_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name');
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
        Schema::drop('cl_class_subjects');
    }
}
