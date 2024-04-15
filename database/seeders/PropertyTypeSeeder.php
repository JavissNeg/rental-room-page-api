<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $propertyTypes = [
            [
                'property_type' => 'Apartamento',
                'description' => 'Vivienda multifamiliar',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'property_type' => 'Departamento',
                'description' => 'Vivienda multifamiliar',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'property_type' => 'Casa',
                'description' => 'Vivienda unifamiliar',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'property_type' => 'Local',
                'description' => 'Inmueble comercial',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
        ];

        DB::table('Property_Type')->insert($propertyTypes);
    }

}
