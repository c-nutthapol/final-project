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
            $table->string('name', 60)->nullable();
            $table->string('second_name', 120)->nullable();
            $table->longText('target')->nullable();
            $table->text('description')->nullable();
            $table->string('level', 60)->nullable(); //entry = ระดับเริ่มต้น, moderate = ระดับปานกลาง , high = ระดับสูง
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->bigInteger('sub_category_id', 0, 1)->nullable();
            $table->string('post_status', 60)->default('private'); //private = ส่วนตัว, public = สาธารณะ
            $table->string('status', 60)->default('correct'); //terminate = ยุติ, correct = ถูกต้อง
            $table->bigInteger('created_by', 0, 1)->nullable();
            $table->bigInteger('updated_by', 0, 1)->nullable();
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
