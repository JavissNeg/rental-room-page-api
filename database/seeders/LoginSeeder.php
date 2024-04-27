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
                'username' => 'admin',
                'password' => 'admin',
                'isVerified' => true,
                'isCertified' => true,
                'person_id' => 1,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
            [
                'username' => 'user',
                'password' => 'user',
                'isVerified' => true,
                'isCertified' => false,
                'person_id' => 2,
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime
            ],
        ];

        DB::table('Login')->insert($logins);
    }
}
