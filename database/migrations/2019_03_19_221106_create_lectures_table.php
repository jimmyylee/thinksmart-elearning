<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            //  $table->integer('lecture_id');
                $table->string('name')->nullable();
                $table->string('subject')->nullable();
            //  $table->integer('lecture_no');
            //  $table->string('select_year');
            //  $table->string('file_upload_path');
            //  $table->integer('course_id');
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
