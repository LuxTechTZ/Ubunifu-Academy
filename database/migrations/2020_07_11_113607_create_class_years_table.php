<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('added_by')->unsigned()->index();
            $table->unsignedBigInteger('leader_id')->unsigned()->index();
            $table->unsignedBigInteger('course_id')->unsigned()->index();
            $table->integer('year');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_years');
    }
}
