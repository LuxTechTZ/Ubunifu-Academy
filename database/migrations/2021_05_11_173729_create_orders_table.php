<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
             $table->id();
            $table->bigInteger('cart_id')->unsigned();
            $table->string('company_ref');
            $table->string('price');
            $table->string('result_code');
            $table->string('result_explanation');
            $table->string('trans_token');
            $table->string('trans_ref');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
