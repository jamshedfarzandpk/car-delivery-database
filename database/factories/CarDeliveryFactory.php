<?php

namespace Database\Factories;

use App\Models\CarDelivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarDeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarDelivery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'car_model_id' => $this->faker->numberBetween(1, 100),
            'state_id' => $this->faker->numberBetween(1, 100)

        ];
    }
}
