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
            'precio'=>$this->faker->numberBetween(150,250),
            'imagen'=>$this->faker->imageUrl(),
            'estado'=> $this->faker->numberBetween(1,0)

        ];
    }
}
