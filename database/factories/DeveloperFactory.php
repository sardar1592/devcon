<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;

class DeveloperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'city_id' => City::pluck('id')->random(),
            'skill' => $this->faker->randomElement(['Laravel', 'NuxtJs', 'VueJs', 'React', 'NodeJs', 'Angular', 'Go']),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'intro' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'pic' => 'http://lorempixel.com/720/480/people/'.rand(1,10)
        ];
    }
}
