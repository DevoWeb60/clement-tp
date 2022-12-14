<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Candidate;
use App\Models\CandidateState;
use App\Models\JobOffer;
use App\Models\State;

class CandidateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->text,
            'file' => 'pdf/cv.pdf',
            'phone' => $this->faker->phoneNumber,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'states_id' => $this->faker->numberBetween(1, 6),
            'job_offer_id' => $this->faker->numberBetween(1, 7),
        ];
    }
}
