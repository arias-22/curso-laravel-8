<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso_id' => rand(1, 10), //rand es un metodo de php que devuelve numero aleatorios entre los parametros proporcionado (de 1 a 5)
            'name' => $this->faker->sentence,
            'free' => rand(1,0),

        ];
    }
}
