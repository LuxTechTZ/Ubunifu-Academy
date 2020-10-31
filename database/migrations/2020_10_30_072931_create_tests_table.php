<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->unsigned()->index();
            $table->unsignedBigInteger('lesson_id')->unsigned()->index();
            $table->integer('weight');
            $table->date('start_date')->nullable();
            $table->integer('max_score');
            $table->integer('pass_score');
            $table->integer('min_score');
            $table->string('postalcode');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
