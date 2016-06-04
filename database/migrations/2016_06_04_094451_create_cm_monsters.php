<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmMonsters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_monsters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('level');
            $table->unsignedInteger('picture_id');
            $table->string('picture');
            $table->string('code');
            $table->timestamp('date_created');
            $table->unsignedInteger('created_by')->index();
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
        Schema::drop('cm_monsters');
    }
}
