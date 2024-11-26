<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria')->insert([
            'nama' => 'harga',
            'bobot' => 5,
            'atribut' => 'cost',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'fasilitas',
            'bobot' => 4,
            'atribut' => 'benefit',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'Jarak',
            'bobot' => 3,
            'atribut' => 'cost',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'luas kamar',
            'bobot' => 2,
            'atribut' => 'benefit',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'keamanan',
            'bobot' => 1,
            'atribut' => 'benefit',
        ]);
    }
}
