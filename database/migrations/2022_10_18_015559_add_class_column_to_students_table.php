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
        Schema::table('students', function (Blueprint $table) {
            // use unsignedBigInteger for foreign key id
            $table->unsignedBigInteger('class_id')->required()->after('nis');
            $table->foreign('class_id')->references('id')->on('class')->onDelete('restrict');
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['class_id']);
            $table->dropColumn('class_id');
        });
    }
};