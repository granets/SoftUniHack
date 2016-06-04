<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmMissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_missions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mission');
            $table->unsignedInteger('points');
            $table->timestamp('date_created');
            $table->unsignedInteger('created_by');
            $table->timestamp('date_updated')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('date_deleted')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by');
            //$table->foreign('created_by')->references('id')->on('users');
            $table->index('updated_by');
            //$table->foreign('updated_by')->references('id')->on('users');
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
        Schema::drop('cm_missions');
    }
}
