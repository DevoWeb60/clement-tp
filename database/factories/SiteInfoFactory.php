<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SiteInfo;

class SiteInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'title' => $this->faker->sentence(4),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'iframe_map' => $this->faker->text,
            'email' => $this->faker->safeEmail,
            'logo' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'favicon' => $this->faker->regexify('[A-Za-z0-9]{250}'),
        ];
    }
}
