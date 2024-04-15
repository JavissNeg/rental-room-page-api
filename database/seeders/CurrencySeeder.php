<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
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
                'name' => 'Peso mexicano',
                'symbol' => '$',
                'code' => 'MXN',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'name' => 'US Dollar',
                'symbol' => '$',
                'code' => 'USD',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'name' => 'Euro',
                'symbol' => '€',
                'code' => 'EUR',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
        ];

        DB::table('Currency')->insert($data);
    }
}
