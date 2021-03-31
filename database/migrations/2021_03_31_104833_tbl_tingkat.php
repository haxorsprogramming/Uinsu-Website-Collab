<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTingkat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tingkat', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_tingkat', 3);
            $table -> char('nama_tingkat', 200);
            $table -> char('deksripsi_tingkat', 200);
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
        Schema::dropIfExists('tbl_tingkat');
    }
}