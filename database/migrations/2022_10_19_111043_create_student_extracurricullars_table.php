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
        Schema::create('student_extracurricullars', function (Blueprint $table) {
            // use unsignedBigInteger for foreign key id
            $table->unsignedBigInteger('student_id')->required();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
            // restrict => class_id tidak dapat dihapus karena student ada menggunakan class_id
            // cascade => class_id dapat dihapus waktu student ada menggunakan class_id

            // use unsignedBigInteger for foreign key id
            $table->unsignedBigInteger('extracurricullar_id')->required();
            $table->foreign('extracurricullar_id')->references('id')->on('extracurricullars')->onDelete('restrict');
            // restrict => class_id tidak dapat dihapus karena student ada menggunakan class_id
            // cascade => class_id dapat dihapus waktu student ada menggunakan class_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_extracurricullars');
    }
};