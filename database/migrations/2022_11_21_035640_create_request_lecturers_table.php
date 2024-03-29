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
            $table->text('record');
            $table->integer('experience');
            $table->string('target_audience');
            $table->text('description')->nullable();
            $table->string('status', 4)->default(0);
            /**
             * status
             *  0 == รอการอนุมัติ
             *
             */

            $table->bigInteger('created_by', 0, 1)->nullable();
            $table->bigInteger('updated_by', 0, 1)->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('request_lecturers');
        Schema::enableForeignKeyConstraints();
    }
};
