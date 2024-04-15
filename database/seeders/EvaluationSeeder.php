<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = now();
        echo $currentDateTime;

        $evaluations = [
            [
                'rating' => 5,
                'comment' => 'Great service!',
                'image_url' => '["https://example.com/image1.jpg","https://example.com/image2.jpg","https://example.com/image3.jpg"]',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rating' => 4,
                'comment' => 'Good service!',
                'image_url' => '["https://example.com/image1.jpg","https://example.com/image2.jpg","https://example.com/image3.jpg"]',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rating' => 3,
                'comment' => 'Average service!',
                'image_url' => '["https://example.com/image1.jpg","https://example.com/image2.jpg","https://example.com/image3.jpg"]',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rating' => 2,
                'comment' => 'Bad service!',
                'image_url' => '["https://example.com/image1.jpg","https://example.com/image2.jpg","https://example.com/image3.jpg"]',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
            [
                'rating' => 1,
                'comment' => 'Terrible service!',
                'image_url' => '["https://example.com/image1.jpg","https://example.com/image2.jpg","https://example.com/image3.jpg"]',
                'updated_at' => $currentDateTime,
                'created_at' => $currentDateTime,
            ],
        ];
        
        DB::table('evaluation')->insert($evaluations);
    }
}
