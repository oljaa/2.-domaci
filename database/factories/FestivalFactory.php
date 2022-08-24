<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FestivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText,
            'festival_type_id' => $this->faker->numberBetween(1, 5),
            'city_id' => $this->faker->numberBetween(1, 20),
            'address' => $this->faker->address,
            'manager' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'start' => $this->faker->date,
            'end' => $this->faker->date
        ];
    }
}
