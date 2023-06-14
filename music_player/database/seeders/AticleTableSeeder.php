<?php

namespace Database\Seeders;

use App\Models\tacgia;
use App\Models\theloai;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\baiviet;

class AticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            baiviet::create([
                'tieude' => $faker->sentence(5, true),
                'ten_bhat' => $faker->word(),
                'ma_tloai' => theloai::all()->random()->ma_tloai,
                'tomtat' => $faker->paragraph(3, true),
                'noidung' => $faker->paragraphs(3, true),
                'ma_tgia' => tacgia::all()->random()->ma_tgia,
                // 'ngayviet' => $faker->dateTime(),
                'hinhanh' => $faker->imageUrl(200, 200, 'cats', true, 'Faker', true)
            ]);
        }
    }

}