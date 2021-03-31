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
            'prefix' => 'FITK',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '002',
            'nama_fakultas' => 'Fakultas Syariah & Ilmu Hukum',
            'deksripsi_fakultas' => 'Mencetak Tenaga Pendidik dan Kependidikan Islam yang profesional',
            'prefix' => 'FASIH',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '003',
            'nama_fakultas' => 'Fakultas Dakwah & Komunikasi',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang dakwah dan komunikasi Islam yang profesional',
            'prefix' => 'FDK',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '004',
            'nama_fakultas' => 'Fakultas Ekonomi & Bisnis Islam',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang Ekonomi dan Bisnis Islam yang profesional',
            'prefix' => 'FEBI',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '005',
            'nama_fakultas' => 'Fakultas Ushuluddin dan Studi Islam',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang tafsir hadis dan studi Islam yang profesional',
            'prefix' => 'FUSI',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '006',
            'nama_fakultas' => 'Fakultas Ilmu Sosial',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang Sosial Islam yang profesional',
            'prefix' => 'FIS',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '007',
            'nama_fakultas' => 'Fakultas Kesehatan Masyarakat',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang kesehatan berbasiskan Islam yang profesional',
            'prefix' => 'FKM',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        DB::table('tbl_fakultas') -> insert([
            'kd_fakultas' => '008',
            'nama_fakultas' => 'Fakultas Sains dan Teknologi',
            'deksripsi_fakultas' => 'Mencetak akademisi di bidang sains dan teknologi berdasarkan Islam yang profesional',
            'prefix' => 'FST',
            'tingkat' => 'S1',
            'active' => '1'
        ]);
        // data tingkat 
        DB::table('tbl_tingkat') -> insert([
            'kd_tingkat' => 'S1',
            'nama_tingkat' => 'S1 (Sarjana)',
            'deksripsi_tingkat' => '-',
            'active' => '1'
        ]);
        DB::table('tbl_tingkat') -> insert([
            'kd_tingkat' => 'S2',
            'nama_tingkat' => 'S2 (Magister)',
            'deksripsi_tingkat' => '-',
            'active' => '1'
        ]);
        DB::table('tbl_tingkat') -> insert([
            'kd_tingkat' => 'S3',
            'nama_tingkat' => 'S3 (Doktoral)',
            'deksripsi_tingkat' => '-',
            'active' => '1'
        ]);
        // data user 
        DB::table('tbl_user') -> insert([
            'username' => 'admin',
            'tipe' => 'super-admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
    }
}
