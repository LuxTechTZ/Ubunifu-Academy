<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id')->unsigned()->index();
            $table->unsignedBigInteger('course_id')->unsigned()->index()->nullable();
            $table->unsignedBigInteger('book_id')->unsigned()->index()->nullable();
            $table->integer('price');
            $table->integer('quantity')->default(1);
            $table->integer('total_price');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
