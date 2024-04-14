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
        $data = [
            [
                'state' => 'Puebla',
                'country_id' => 1,
            ],
            [
                'state' => 'Tlaxcala',
                'country_id' => 1,
            ],
            [
                'state' => 'Ciudad de México',
                'country_id' => 1,
            ],
            [
                'state' => 'Querétaro',
                'country_id' => 1,
            ],
            [
                'state' => 'Hidalgo',
                'country_id' => 1,
            ],
            [
                'state' => 'Morelos',
                'country_id' => 1,
            ],
            [
                'state' => 'Guerrero',
                'country_id' => 1,
            ],
            [
                'state' => 'Oaxaca',
                'country_id' => 1,
            ],
            [
                'state' => 'Veracruz',
                'country_id' => 1,
            ],
            [
                'state' => 'Tabasco',
                'country_id' => 1,
            ],
            [
                'state' => 'Chiapas',
                'country_id' => 1,
            ],
            [
                'state' => 'Campeche',
                'country_id' => 1,
            ],
            [
                'state' => 'Yucatán',
                'country_id' => 1,
            ],
            [
                'state' => 'Quintana Roo',
                'country_id' => 1,
            ],
            [
                'state' => 'Nuevo León',
                'country_id' => 1,
            ],
            [
                'state' => 'Tamaulipas',
                'country_id' => 1,
            ],
            [
                'state' => 'Coahuila',
                'country_id' => 1,
            ],
            [
                'state' => 'Durango',
                'country_id' => 1,
            ],
            [
                'state' => 'Zacatecas',
                'country_id' => 1,
            ],
            [
                'state' => 'San Luis Potosí',
                'country_id' => 1,
            ],
            [
                'state' => 'Aguascalientes',
                'country_id' => 1,
            ],
            [
                'state' => 'Jalisco',
                'country_id' => 1,
            ],
        ];
        
        DB::table('State')->insert($data);
    }
}
