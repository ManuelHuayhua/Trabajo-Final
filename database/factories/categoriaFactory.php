<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class categoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libro'=>$this->faker->text(10),
            'descripcion'=>$this->faker->text(),
            'estado'=> 1
        ];
    }
}
