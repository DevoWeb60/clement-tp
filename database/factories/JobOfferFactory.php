<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JobOffer;

class JobOfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobOffer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'salary' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'skills' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'city' => $this->faker->city,
            'iframe_map' => $this->faker->text,
        ];
    }
}
