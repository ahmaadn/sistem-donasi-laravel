<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Carbon\Carbon;
use Faker\Core\DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campaigns = [
            [
                'title' => "Bantu Anak Yatim",
                "description" => "Donasi untuk mendukung pendidikan anak-anak yatim di Indonesia.",
                "image" => "images/causes/group-african-kids-paying-attention-class.jpg",
                "deadline" => Carbon::now()->addMonths(1),
                "goal" => 100_000_000,
                "collected" => 10_001_500,
                "status" => "open",
                "created_by" => 1
            ],
            [
                'title' => "Bantu Korban Bencana",
                "description" => "Donasi untuk membantu korban bencana alam yang membutuhkan bantuan mendesak.",
                "image" => "images/causes/group-african-kids-paying-attention-class.jpg",
                "deadline" => Carbon::now()->addMonths(2),
                "goal" => 1_000_000,
                "collected" => 543_200,
                "status" => "open",
                "created_by" => 1
            ],
            [
                'title' => "Pembangunan Masjid",
                "description" => "Donasi untuk pembangunan masjid di daerah pelosok.",
                "image" => "images/causes/group-african-kids-paying-attention-class.jpg",
                "deadline" => Carbon::now()->addMonths(3),
                "goal" => 75_000_000,
                "collected" => 30_000_000,
                "status" => "closed",
                "created_by" => 2
            ]
        ];

        foreach ($campaigns as $campaign) {
            Campaign::create($campaign);
        }
    }

}
