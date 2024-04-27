<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $logins = [
            [
                'first_name' => 'Javier',
                'paternal_surname' => 'Negrete',
                'maternal_surname' => 'Barranco',
                'mail' => 'a@example.com',
                'phone' => '1234567890',
                'password' => 'admin',
                'isVerified' => true,
                'isCertified' => false,
                'address_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'first_name' => 'User 2',
                'paternal_surname' => 'surname 2',
                'maternal_surname' => 'surname 2',
                'mail' => 'e@gmail.com',
                'phone' => '0987654321',
                'password' => 'admin',
                'isVerified' => true,
                'isCertified' => false,
                'address_id' => 2,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
        ];

        DB::table('Login')->insert($logins);
    }
}
