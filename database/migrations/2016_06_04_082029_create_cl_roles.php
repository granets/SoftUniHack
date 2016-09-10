<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
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
        Schema::drop('cl_roles');
    }
}
