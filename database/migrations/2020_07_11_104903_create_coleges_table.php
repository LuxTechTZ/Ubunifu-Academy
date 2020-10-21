<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('added_by')->unsigned()->index();
            $table->unsignedBigInteger('leader_id')->unsigned()->index();
            $table->string('name');
            $table->string('acronym');
            $table->string('region');
            $table->string('district');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coleges');
    }
}
