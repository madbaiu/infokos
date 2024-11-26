<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'keterangan' => 'Sangat Murah',
            'bobot' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'keterangan' => 'Murah',
            'bobot' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'keterangan' => 'Sedang',
            'bobot' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'keterangan' => 'Mahal',
            'bobot' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'keterangan' => 'Sangat Mahal',
            'bobot' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'keterangan' => 'Sangat Lengkap',
            'bobot' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'keterangan' => 'Cukup Lengkap',
            'bobot' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'keterangan' => 'Lengkap',
            'bobot' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'keterangan' => 'Kurang Lengkap',
            'bobot' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'keterangan' => 'Tidak Lengkap',
            'bobot' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'keterangan' => 'Sangat Dekat',
            'bobot' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'keterangan' => 'Dekat',
            'bobot' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'keterangan' => 'Sedang',
            'bobot' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'keterangan' => 'Jauh',
            'bobot' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'keterangan' => 'Sangat Jauh',
            'bobot' => 1,
        ]);
        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'keterangan' => 'Sangat Luas',
            'bobot' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'keterangan' => 'Luas',
            'bobot' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'keterangan' => 'Sedang',
            'bobot' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'keterangan' => 'Kecil',
            'bobot' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'keterangan' => 'Sangat Kecil',
            'bobot' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'keterangan' => 'Sangat Aman',
            'bobot' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'keterangan' => 'Aman',
            'bobot' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'keterangan' => 'Cukup Aman',
            'bobot' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'keterangan' => 'Kurang Aman',
            'bobot' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'keterangan' => 'Sangat Aman',
            'bobot' => 1,
        ]);
    }
}
