<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['country' => 'México'],
            ['country' => 'Argentina'],
            ['country' => 'Bolivia'],
            ['country' => 'Brasil'],
            ['country' => 'Chile'],
            ['country' => 'Colombia'],
            ['country' => 'Ecuador'],
            ['country' => 'Guyana'],
            ['country' => 'Paraguay'],
            ['country' => 'Perú'],
            ['country' => 'Surinam'],
            ['country' => 'Uruguay'],
            ['country' => 'Venezuela'],
        ];

        DB::table('Country')->insert($data);
    }
}
