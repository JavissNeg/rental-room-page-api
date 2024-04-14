<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\City::factory(10)->create();

        $data = [
            [
                'city' => 'City 1',
                'state_id' => 1,
            ],
            [
                'city' => 'City 2',
                'state_id' => 1,
            ],
            [
                'city' => 'City 3',
                'state_id' => 1,
            ],
            [
                'city' => 'City 4',
                'state_id' => 1,
            ],
            [
                'city' => 'City 5',
                'state_id' => 1,
            ],
            [
                'city' => 'City 6',
                'state_id' => 1,
            ],
            [
                'city' => 'City 7',
                'state_id' => 1,
            ],
            [
                'city' => 'City 8',
                'state_id' => 2,
            ],
            [
                'city' => 'City 9',
                'state_id' => 2,
            ],
            [
                'city' => 'City 10',
                'state_id' => 2,
            ],
        ];

        DB::table('City')->insert($data);
    }
}
