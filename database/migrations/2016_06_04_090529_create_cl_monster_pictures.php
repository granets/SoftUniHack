<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClMonsterPictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_monster_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture');
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
        Schema::drop('cl_monster_pictures');
    }
}
