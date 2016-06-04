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
            $table->unsignedInteger('deleted_by')->index();
            $table->timestamp('date_deleted');
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
