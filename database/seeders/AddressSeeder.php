<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'street' => 'Rua 1',
                'district' => 'Bairro 1',
                'zip_code' => 12345678,
                'street_number' => 123,
                'apartment_number' => 123,
                'city_id' => 1,
            ],
            [
                'street' => 'Rua 2',
                'district' => 'Bairro 2',
                'zip_code' => 87654321,
                'street_number' => 321,
                'apartment_number' => 321,
                'city_id' => 1,
            ],
            [
                'street' => 'Rua 3',
                'district' => 'Bairro 3',
                'zip_code' => 12348765,
                'street_number' => 456,
                'apartment_number' => 456,
                'city_id' => 1,
            ],
            [
                'street' => 'Rua 4',
                'district' => 'Bairro 4',
                'zip_code' => 56781234,
                'street_number' => 567,
                'apartment_number' => 567,
                'city_id' => 1,
            ],
            [
                'street' => 'Rua 5',
                'district' => 'Bairro 5',
                'zip_code' => 87651234,
                'street_number' => 876,
                'apartment_number' => 876,
                'city_id' => 1,
            ],
            [
                'street' => 'Rua 6',
                'district' => 'Bairro 6',
                'zip_code' => 12345678,
                'street_number' => 123,
                'apartment_number' => 123,
                'city_id' => 2,
            ],
            [
                'street' => 'Rua 7',
                'district' => 'Bairro 7',
                'zip_code' => 87654321,
                'street_number' => 321,
                'apartment_number' => 321,
                'city_id' => 2,
            ],
            [
                'street' => 'Rua 8',
                'district' => 'Bairro 8',
                'zip_code' => 12348765,
                'street_number' => 456,
                'apartment_number' => 456,
                'city_id' => 2,
            ],
            [
                'street' => 'Rua 9',
                'district' => 'Bairro 9',
                'zip_code' => 56781234,
                'street_number' => 567,
                'apartment_number' => 567,
                'city_id' => 2,
            ],
            [
                'street' => 'Rua 10',
                'district' => 'Bairro 10',
                'zip_code' => 87651234,
                'street_number' => 876,
                'apartment_number' => 876,
                'city_id' => 3,
            ],
        ];
        
        DB::table('Address')->insert($data);
    }
}
