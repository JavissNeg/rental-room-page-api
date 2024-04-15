<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $rentalStatuses = [
            [
                'rental_status' => 'Payed',
                'description' => 'Tenant has paid the rent',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rental_status' => 'Pending',
                'description' => 'Tenant has not paid the rent',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rental_status' => 'Expired',
                'description' => 'Rental contract has expired',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ]
        ];

        DB::table('Rental_Status')->insert($rentalStatuses);
    }
}
