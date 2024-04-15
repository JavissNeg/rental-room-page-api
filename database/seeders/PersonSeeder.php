<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $people = [
            [
                'first_name' => 'Javier',
                'paternal_surname' => 'Negrete',
                'maternal_surname' => 'Barranco',
                'mail' => 'a@example.com',
                'phone' => '1234567890',
                'address_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'first_name' => 'User 2',
                'paternal_surname' => 'surname 2',
                'maternal_surname' => 'surname 2',
                'mail' => 'b@gmail.com',
                'phone' => '0987654321',
                'address_id' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'first_name' => 'User 3',
                'paternal_surname' => 'surname 3',
                'maternal_surname' => 'surname 3',
                'mail' => 'c@gmail.com',
                'phone' => '0987654321',
                'address_id' => 3,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'first_name' => 'User 4',
                'paternal_surname' => 'surname 4',
                'maternal_surname' => 'surname 4',
                'mail' => 'd@gmail.com',
                'phone' => '0987654321',
                'address_id' => 4,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'first_name' => 'User 5',
                'paternal_surname' => 'surname 5',
                'maternal_surname' => 'surname 5',
                'mail' => 'e@gmail.com',
                'phone' => '0987654321',
                'address_id' => 5,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ];

        DB::table('person')->insert($people);
    }
}
