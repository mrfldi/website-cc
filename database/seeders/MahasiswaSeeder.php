<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('latihans')->insert([
            'nama' => Str('Muhammad Rifaldi'),
            'nim' => Str('10201065'),
            'prodi' => Str('Sistem Informasi'),
        ]);
    }
}
