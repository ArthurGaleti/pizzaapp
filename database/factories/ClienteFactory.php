<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'ddd' => '11',
            'celular' => fake()->numberBetween(10,500),
            'email' => fake()->email(),
            'observacoes' => fake()->paragraph(),
        ];
    }
}
