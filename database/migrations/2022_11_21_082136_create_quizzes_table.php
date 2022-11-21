<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->integer('quiz_id');
            $table->integer('section_id')->unsigned();
            $table->string('post_status', 60);
            $table->integer('pass_scors', 5);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('section_id')->references('section_id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
