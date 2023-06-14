<?php

namespace Database\Factories;

use App\Models\tacgia;
use App\Models\theloai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tieude' => $this->faker->sentence(5),
            'ten_bhat' => $this->faker->word(),
            'ma_tloai' => theloai::all()->random()->ma_tloai,
            'tomtat' => $this->faker->paragraph(),
            'noidung' => $this->faker->paragraphs(3, true),
            'ma_tgia' => tacgia::all()->random()->ma_tgia,
            'ngayviet' => $this->faker->dateTime(),
            'hinhanh' => $this->faker->imageUrl(200, 200, 'cats', true, 'Faker', true),
        ];
    }
}