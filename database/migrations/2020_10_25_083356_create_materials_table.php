<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id')->unsigned()->index();
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->string('name');
            $table->string('protocol')->nullable();
            $table->string('address')->nullable();
            $table->string('path')->nullable();
            $table->string('key')->nullable();
            $table->string('token')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('size')->nullable();
            $table->string('local_file')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
