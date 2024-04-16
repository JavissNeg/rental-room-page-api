<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $rentals = [
            [
                'total' => 1000.00,
                'start_date' => '2020-01-01 00:00:00',
                'end_date' => '2020-01-31 23:59:59',
                'rental_status_id' => 1,
                'property_id' => 1,
                'lessee_id' => 1,
                'evaluation_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'total' => 2000.00,
                'start_date' => '2020-02-01 00:00:00',
                'end_date' => '2020-02-29 23:59:59',
                'rental_status_id' => 1,
                'property_id' => 2,
                'lessee_id' => 2,
                'evaluation_id' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
        ];

        DB::table('Rental')->insert($rentals);
    }
}
