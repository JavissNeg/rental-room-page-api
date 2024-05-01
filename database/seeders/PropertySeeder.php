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
                'image_url' => '["https://www.apartments.com/blog/sites/default/files/styles/x_large/public/image/2023-06/ParkLine-apartment-in-Miami-FL.jpg.webp?itok=lYDRCGzC","https://www.redfin.com/blog/wp-content/uploads/2022/09/spacejoy-xkJ2_THgKmk-unsplash.jpg"]',
                'price' => 1000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 5.0,
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
                'image_url' => '["https://chnapartments.com/assets/images/cache/TH1-Virtual-Staging-Dining-area-85254c4820a2f874ca05573c50c98781.jpg"]',
                'price' => 2000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 4.0,
                'lessor_id' => 2,
                'address_id' => 2,
                'property_type_id' => 2,
                'currency_id' => 2,
                'period_id' => 2,
            ],
            [
                'name' => 'Property 3',
                'description' => 'Description 3',
                'bedrooms_number' => 4,
                'bathrooms_number' => 3,
                'image_url' => '["https://via.placeholder.com/150"]',
                'price' => 3000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 3.0,
                'lessor_id' => 3,
                'address_id' => 3,
                'property_type_id' => 3,
                'currency_id' => 3,
                'period_id' => 3,
            ],
            [
                'name' => 'Property 4',
                'description' => 'Description 4',
                'bedrooms_number' => 5,
                'bathrooms_number' => 4,
                'image_url' => '["https://via.placeholder.com/150"]',
                'price' => 4000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 2.0,
                'lessor_id' => 1,
                'address_id' => 4,
                'property_type_id' => 2,
                'currency_id' => 2,
                'period_id' => 3,
            ],
            [
                'name' => 'Property 5',
                'description' => 'Description 5',
                'bedrooms_number' => 6,
                'bathrooms_number' => 5,
                'image_url' => '["https://www.redfin.com/blog/wp-content/uploads/2022/09/spacejoy-xkJ2_THgKmk-unsplash.jpg","https://chnapartments.com/assets/images/cache/TH1-Virtual-Staging-Dining-area-85254c4820a2f874ca05573c50c98781.jpg"]',
                'price' => 7000,
                'isVerified' => true,
                'isAvaible' => true,
                'rating' => 2.6,
                'lessor_id' => 2,
                'address_id' => 5,
                'property_type_id' => 1,
                'currency_id' => 1,
                'period_id' => 1,
            ],
        ];

        DB::table('Property')->insert($properties);

    }
}
