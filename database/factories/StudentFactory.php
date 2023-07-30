<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date(),
            'jenkel' => fake()->randomElement(['laki-laki', 'perempuan'])
        ];
    }
}
