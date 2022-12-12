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
            $table->id('id');
            $table->string('name', 60);
            $table->string('second_name', 120);
            $table->longText('target');
            $table->text('description');
            $table->integer('level');
            $table->text('image');
            $table->text('video');
            $table->bigInteger('sub_category_id', 0, 1);
            $table->string('post_status', 60);
            $table->string('status', 60);
            $table->bigInteger('created_by', 0, 1);
            $table->bigInteger('updated_by', 0, 1);
            $table->bigInteger('deleted_by', 0, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
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
