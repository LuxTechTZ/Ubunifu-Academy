<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('status')->default(0)->after('image');
            $table->boolean('published')->default(0)->after('status');
            $table->bigInteger('approved_by')->unsigned()->nullable()->after('status');

            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('published');

            $table->dropForeign('courses_approved_by_foreign');
            $table->dropColumn('approved_by');
        });
    }
}
