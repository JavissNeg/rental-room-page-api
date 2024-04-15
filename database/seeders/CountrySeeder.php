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
        $currentDateTime = now();
        echo $currentDateTime;

        $data = [
            [
                'country' => 'México', 
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'country' => 'United States',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
        ];

        DB::table('Country')->insert($data);
    }
}
