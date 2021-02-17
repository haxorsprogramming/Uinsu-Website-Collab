<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // data fakultas awal 
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '001',
            'nama_fakultas' => 'Fakultas Ilmu Tarbiyah & Keguruan',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang hukum dan Islam yang profesional',
            'slug' => 'fakultas-ilmu-tarbiyah-dan-keguruan',
            'prefix' => 'FITK',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '002',
            'nama_fakultas' => 'Fakultas Syariah & Ilmu Hukum',
            'deksripsi_fakultas' => 'Mencetak Tenaga Pendidik dan Kependidikan Islam yang profesional',
            'slug' => 'fakultas-syariah-dan-ilmu-hukum',
            'prefix' => 'FASIH',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '003',
            'nama_fakultas' => 'Fakultas Dakwah & Komunikasi',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang dakwah dan komunikasi Islam yang profesional',
            'slug' => 'fakultas-dakwah-dan-komunikasi',
            'prefix' => 'FDK',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '004',
            'nama_fakultas' => 'Fakultas Ekonomi & Bisnis Islam',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang Ekonomi dan Bisnis Islam yang profesional',
            'slug' => 'fakultas-ekonomi-dan-bisnis-islam',
            'prefix' => 'FEBI',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '005',
            'nama_fakultas' => 'Fakultas Ushuluddin dan Studi Islam',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang tafsir hadis dan studi Islam yang profesional',
            'slug' => 'fakultas-ushuluddin-dan-studi-islam',
            'prefix' => 'FUSI',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '006',
            'nama_fakultas' => 'Fakultas Ilmu Sosial',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang Sosial Islam yang profesional',
            'slug' => 'fakultas-ilmu-sosial',
            'prefix' => 'FIS',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '007',
            'nama_fakultas' => 'Fakultas Kesehatan Masyarakat',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang kesehatan berbasiskan Islam yang profesional',
            'slug' => 'fakultas-kesehatan-masyarakat',
            'prefix' => 'FKM',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '008',
            'nama_fakultas' => 'Fakultas Sains dan Teknologi',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang sains dan teknologi berdasarkan Islam yang profesional',
            'slug' => 'fakultas-sains-dan-teknologi',
            'prefix' => 'FST',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
    }
}
