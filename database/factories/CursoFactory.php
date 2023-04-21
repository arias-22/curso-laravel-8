<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 5), //rand es un metodo de php que devuelve numero aleatorios entre los parametros proporcionado (de 1 a 5)
            'categoria_id' => rand(1, 3),

            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(1280, 720),
            'description' => $this->faker->text(800),
        ];
    }
}
