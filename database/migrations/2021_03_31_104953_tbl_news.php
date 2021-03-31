<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_news', 50);
            $table -> char('judul', 200);
            $table -> char('short_deks', 200);
            $table -> char('time_post', 100);
            $table -> text('isi');
            $table -> char('kd_kategory', 100);
            $table -> char('slug', 200);
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
        Schema::dropIfExists('tbl_news');
    }
}
