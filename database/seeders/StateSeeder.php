<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
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
                'state' => 'Puebla',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Ciudad de México',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Nuevo León',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Baja California',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Jalisco',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Quintana Roo',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Baja California Sur',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Yucatán',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Querétaro',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'state' => 'Guanajuato',
                'country_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
        ];
        
        DB::table('State')->insert($data);
    }
}
