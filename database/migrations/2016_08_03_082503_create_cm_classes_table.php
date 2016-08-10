<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('class_letter');
            $table->unsignedInteger('class_number');        
            $table->unsignedInteger('school_id');
            $table->unsignedInteger('cm_lead_teacher_id');
            $table->string('school_year');
            $table->string('class_code');

            $table->timestamp('created_at');
            $table->unsignedInteger('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('date_deleted')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by');
            $table->index('updated_by');
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
        Schema::drop('cm_classes');
    }
}
