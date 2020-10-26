<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntroVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intro_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->unsigned()->index();
            $table->string('protocol');
            $table->string('address');
            $table->string('path');
            $table->string('key');
            $table->string('token');
            $table->string('type');
            $table->string('status');
            $table->string('size');
            $table->timestamps();
            $table->softDeletes();


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
        Schema::dropIfExists('intro_videos');
    }
}
