<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\ContactObject;
use App\Models\Delivery;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'message' => $this->faker->text,
            'phone' => $this->randomPhoneNumber(),
            'email' => $this->faker->safeEmail,
            'viewed' => $this->faker->boolean,
            'delivery_id' => $this->faker->numberBetween(1, 3),
            'object_id' => $this->faker->numberBetween(1, 3),
        ];
    }

    public function randomPhoneNumber()
    {
        return '0' . $this->faker->numberBetween(0, 9) . ' ' . $this->faker->numberBetween(10, 99) . ' ' . $this->faker->numberBetween(10, 99) . ' ' . $this->faker->numberBetween(10, 99) . ' ' . $this->faker->numberBetween(10, 99);
    }
}
