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
                EvaluationSeeder::class,
                PeriodSeeder::class,
                PropertyTypeSeeder::class,
                RentalStatusSeeder::class,
                PersonSeeder::class,
                LoginSeeder::class, // here
                PropertySeeder::class, // lack
                RentalSeeder::class, // lack
            ]
        );
    }
}
