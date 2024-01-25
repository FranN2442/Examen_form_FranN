<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->title(),
            'extracto' => 'f32af3411',
            'contenido_post' => fake()->paragraph(),
            'acceso' => 'public',
            'caducable' => fake()->boolean(),
            'comentable' => fake()->boolean(),
        ];
    }
}
