<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_promotes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("school_id")->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->bigInteger("student_id")->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->bigInteger("previous_session_id")->unsigned();
            $table->foreign('previous_session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->bigInteger("previous_class_id")->unsigned();
            $table->foreign('previous_class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->bigInteger("previous_section_id")->unsigned();
            $table->foreign('previous_section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->bigInteger("current_session_id")->unsigned();
            $table->foreign('current_session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->bigInteger("current_class_id")->unsigned();
            $table->foreign('current_class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->bigInteger("current_section_id")->unsigned();
            $table->foreign('current_section_id')->references('id')->on('sections')->onDelete('cascade');
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
        Schema::dropIfExists('student_promotes');
    }
};
