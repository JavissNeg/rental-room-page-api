<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\City::factory(10)->create();

        $currentDateTime = now();
        echo $currentDateTime;

        $data = [
            [
                'city' => 'Puebla de Zaragoza',
                'state_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'city' => 'Huauchinango',
                'state_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'city' => 'Xicotepec de Juárez',
                'state_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'city' => 'City 8',
                'state_id' => 2,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'city' => 'City 9',
                'state_id' => 2,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'city' => 'City 10',
                'state_id' => 3,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
        ];

        DB::table('City')->insert($data);
    }
}
