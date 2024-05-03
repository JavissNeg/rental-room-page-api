<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                CountrySeeder::class,
                StateSeeder::class,
                CitySeeder::class,
                AddressSeeder::class,
                CurrencySeeder::class,
                PeriodSeeder::class,
                PropertyTypeSeeder::class,
                RentalStatusSeeder::class,
                LoginSeeder::class, 
                PropertySeeder::class,
                EvaluationSeeder::class,
                PaymentStatusSeeder::class,
                PaymentSeeder::class,
                RentalSeeder::class, 
            ]
        );
    }
}
