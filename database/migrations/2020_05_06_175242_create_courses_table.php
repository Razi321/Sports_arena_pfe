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

            $table->increments('id_course');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('duration')->nullable();
            $table->mediumText('frequency')->nullable();
            $table->mediumText('target')->nullable();
            $table->mediumText('outfit')->nullable();
            $table->double('price_month')->nullable();
            $table->double('price_session')->nullable();
            $table->integer('id_gym');
            $table->timestamps();

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
