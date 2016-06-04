<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConMonstersLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_monsters_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('monster_id')->index();
            $table->unsignedInteger('level_id')->index();
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
        Schema::drop('con_monsters_levels');
    }
}
