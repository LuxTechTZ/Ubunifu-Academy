<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('course_id')->after('location')->unsigned()->default(1)->index();
            // $table->unsignedBigInteger('college_id')->unsigned()->default(1)->index();
            $table->unsignedBigInteger('yos_id')->unsigned()->default(1)->index();
            $table->unsignedBigInteger('semester_id')->unsigned()->default(1)->index();


            // $table->foreign('college_id')->references('id')->on('coleges')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('yos_id')->references('id')->on('class_yaers')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
