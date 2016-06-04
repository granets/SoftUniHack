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
            //$table->unsignedInteger('created_by')->index();
            $table->timestamp('date_updated');
            $table->unsignedInteger('updated_by')->index();
            $table->timestamp('date_deleted');
            $table->unsignedInteger('deleted_by')->index();
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
