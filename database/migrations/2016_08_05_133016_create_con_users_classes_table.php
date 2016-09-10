<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConUsersClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_users_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('cm_class_id')->index();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->timestamp('date_deleted')->nullable();

            $table->index('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('con_users_classes');
    }
}
