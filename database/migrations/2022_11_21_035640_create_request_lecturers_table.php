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
        Schema::create('request_lecturers', function (Blueprint $table) {
            $table->id('id');
            $table->text('description');
            $table->longText('files');
            $table->string('status', 50);
            $table->bigInteger('created_by', 0, 1)->nullable();
            $table->bigInteger('updated_by', 0, 1)->nullable();
            $table->bigInteger('deleted_by', 0, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('request_lecturers');
    }
};
