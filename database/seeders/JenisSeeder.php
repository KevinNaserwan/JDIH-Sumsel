<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Undang-undang Dasar',
            'Ketetapan MPR',
            'Undang-Undang Peraturan Pemerintah Pengganti Undang-Undang',
            'Peraturan Pemerintah',
            'Peraturan Presiden',
            'Keputusan Presiden',
            'Peraturan Menteri',
            'Keputusan Menteri',
            'Peraturan Bersama',
            'Peraturan Daerah Provinsi',
            'Peraturan Gubernur Sumatera Selatan',
            'Peraturan Daerah Kota',
            'Peraturan Daerah Kabupaten',
            'Peraturan Dewan Perwakilan Rakyat Daerah',
            'Keputusan Gubernur',
            'Peraturan Walikota',
            'Peraturan Bupati',
            'Rancangan Peraturan Daerah',
            'MOU Antar Daerah',
            'Peraturan Desa',
            'Surat Edaran',
        ];

        foreach ($data as $jenisDokumen) {
            DB::table('jenis')->insert(['jenis_dokumen' => $jenisDokumen]);
        }
    }
}
