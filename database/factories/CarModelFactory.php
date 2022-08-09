<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = State::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'value' => $this->faker->numberBetween(1, 100),
            'car_id' => $this->faker->numberBetween(1, 100),
            'state_id' => $this->faker->numberBetween(1999, 2022)


        ];
    }
}
