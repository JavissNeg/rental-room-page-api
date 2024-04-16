<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'name' => 'Property 1',
                'description' => 'Description 1',
                'bedrooms_number' => 2,
                'bathrooms_number' => 1,
                'image_url' => 'https://via.placeholder.com/150',
                'price' => 1000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 5,
                'lessor_id' => 1,
                'address_id' => 1,
                'property_type_id' => 1,
                'currency_id' => 1,
                'period_id' => 1,
            ],
            [
                'name' => 'Property 2',
                'description' => 'Description 2',
                'bedrooms_number' => 3,
                'bathrooms_number' => 2,
                'image_url' => 'https://via.placeholder.com/150',
                'price' => 2000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 4,
                'lessor_id' => 2,
                'address_id' => 2,
                'property_type_id' => 2,
                'currency_id' => 2,
                'period_id' => 2,
            ],
        ];

        DB::table('Property')->insert($properties);

    }
}
