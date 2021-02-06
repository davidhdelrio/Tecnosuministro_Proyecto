<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;


class ServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'client' => $this->faker->text(),
           'type service' => $this->faker->text(),
           'cost' => $this->faker->text(),
           'date' => $this->faker->date(),
           'client_id' => $this->faker->numberBetween($min = 1, $max = 10)
           
        ];
    }
}
