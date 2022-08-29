<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PageContent;

class PageContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PageContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'section_name' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'link' => $this->faker->regexify('[A-Za-z0-9]{250}'),
        ];
    }
}
