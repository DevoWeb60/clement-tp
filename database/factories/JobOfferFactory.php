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
            'salary' => $this->faker->numberBetween(1000, 2000),
            'skills' => $this->faker->word() . ',' . $this->faker->word() . ',' . $this->faker->word(),
            'city' => $this->faker->city,
            'active' => $this->faker->boolean(50),
            'iframe_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.95410642869!2d2.276995745596287!3d48.858833639609905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1661859290925!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ];
    }
}
