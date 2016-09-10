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
            $table->unsignedInteger('min_level');
            $table->timestamp('created_at');
            $table->unsignedInteger('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('date_deleted')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_at');
            //$table->foreign('created_by')->references('id')->on('users');
            $table->index('updated_at');
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
