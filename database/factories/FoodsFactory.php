<?php

namespace Database\Factories;

use App\Models\Foods;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodsFactory extends Factory
{
    protected $model = Foods::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 100), // random price between 1 and 100
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
