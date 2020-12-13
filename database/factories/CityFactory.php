<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => 'USA',
            'history' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'pic' => 'http://lorempixel.com/720/480/city/'.rand(1,10)

        ];
    }
}
