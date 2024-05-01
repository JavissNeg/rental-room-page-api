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
                'period' => 'día',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'period' => 'mes',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'period' => 'semana',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
        ];

        DB::table('period')->insert($periods);

    }
}
