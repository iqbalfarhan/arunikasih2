<?php

namespace Database\Factories;

use App\Models\Jenis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paket>
 */
class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_id' => fake()->randomElement(Jenis::pluck('id')),
            'name' => fake()->word(),
            'harga' => fake()->numberBetween(100000, 500000),
            'keterangan' => fake()->sentence(),
        ];
    }
}
