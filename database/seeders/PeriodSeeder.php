<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $periods = [
            [
                'period' => 'al día',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'period' => 'al mes',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'period' => 'a la semana',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
        ];

        DB::table('period')->insert($periods);

    }
}
