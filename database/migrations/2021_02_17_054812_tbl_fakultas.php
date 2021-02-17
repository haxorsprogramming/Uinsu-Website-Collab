<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblFakultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_fakultas', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_fakultas', 50);
            $table -> char('nama_fakultas', 200);
            $table -> char('deksripsi_fakultas', 200);
            $table -> char('slug', 100);
            $table -> char('prefix', 100);
            $table -> char('tingkat', 5);
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_fakultas');
    }
}
