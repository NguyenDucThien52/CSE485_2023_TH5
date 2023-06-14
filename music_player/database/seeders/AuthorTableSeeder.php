<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\tacgia;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            tacgia::create([
                'ma_tgia' => $i + 1,
                'ten_tgia' => $faker->sentence(2, true),
                'hinh_tgia' => $faker->sentence(6, true)
            ]);
        }
    }
}