<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LytuanSinhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lytuan_sinhvien', function (Blueprint $table) {
            $table->increments('id');
            $table ->string('ten');
            $table -> string('lop');
            $table -> string('masv')->unique();
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
        Schema::drop('lytuan_sinhvien');
    }
}
