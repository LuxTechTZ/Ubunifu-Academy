<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('book_category_id')->unsigned();
            $table->string('title');
            $table->string('quote');
            $table->string('about');
            $table->longText('description');
            $table->string('author');
            $table->string('pages');
            $table->string('weight');
            $table->integer('price');
            $table->string('isbn');
            $table->string('language');
            $table->string('publisher');
            $table->date('date_published');
            $table->string('status');
            $table->string('cover_image');
            $table->string('back_image');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_category_id')->references('id')->on('book_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
