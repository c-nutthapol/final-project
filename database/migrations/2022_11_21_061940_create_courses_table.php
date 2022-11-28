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
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('course_id')->primary();
            $table->integer('user_id');
            $table->string('name', 60);
            $table->string('second_name', 120);
            $table->longText('target');
            $table->text('description');
            $table->integer('level');
            $table->text('image');
            $table->text('video');
            $table->integer('cert_config_id');
            $table->integer('sub_category_id');
            $table->string('post_status', 60);
            $table->string('status', 60);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_categories');
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
};
