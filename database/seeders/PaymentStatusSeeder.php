<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentStatuses = [
            [
                'payment_status' => 'Pending',
                'description' => 'Payment is pending'
            ],
            [
                'payment_status' => 'Paid',
                'description' => 'Payment is paid'
            ],
            [
                'payment_status' => 'Failed',
                'description' => 'Payment failed'
            ],
        ];

        DB::table('Payment_Status')->insert($paymentStatuses);
    }
}
