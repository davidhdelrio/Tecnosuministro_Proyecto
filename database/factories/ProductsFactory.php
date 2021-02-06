<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->text(),
            'description' => $this->faker->text(),
            'cost' => $this->faker->text(),
            'client_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'service_id' => $this->faker->numberBetween($min = 1, $max = 10)

        ];
    }
}
