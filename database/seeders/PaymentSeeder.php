<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $payments = [
            [
                'payment_key' => '1',
                'payment_type' => 'Paypal',
                'amount' => 1000,
                'property_id' => 1,
                'lessee_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'payment_key' => '2',
                'payment_type' => 'Paypal',
                'amount' => 2000,
                'property_id' => 1,
                'lessee_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
        ];

        DB::table('payment')->insert($payments);
    }
}
