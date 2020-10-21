<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('added_by')->unsigned()->index();
            $table->unsignedBigInteger('yos_id')->unsigned()->index();
            $table->integer('number');
            $table->string('roman_value');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('yos_id')->references('id')->on('class_years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
