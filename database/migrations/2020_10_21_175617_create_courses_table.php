<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id')->unsigned()->index();
            $table->unsignedBigInteger('category_id')->unsigned()->index();
            $table->string('title');
            $table->string('description');
            $table->longtext('full_details');
            $table->string('price');
            $table->string('discount_price');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
