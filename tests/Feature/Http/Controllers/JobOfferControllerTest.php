<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\JobOfferController
 */
class JobOfferControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $jobOffers = JobOffer::factory()->count(3)->create();

        $response = $this->get(route('job-offer.index'));

        $response->assertOk();
        $response->assertViewIs('job-offers.index');
        $response->assertViewHas('jobOffer');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('job-offer.create'));

        $response->assertOk();
        $response->assertViewIs('job-offers.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JobOfferController::class,
            'store',
            \App\Http\Requests\JobOfferStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $description = $this->faker->text;
        $salary = $this->faker->word;
        $skills = $this->faker->word;
        $city = $this->faker->city;

        $response = $this->post(route('job-offer.store'), [
            'name' => $name,
            'description' => $description,
            'salary' => $salary,
            'skills' => $skills,
            'city' => $city,
        ]);

        $jobOffers = JobOffer::query()
            ->where('name', $name)
            ->where('description', $description)
            ->where('salary', $salary)
            ->where('skills', $skills)
            ->where('city', $city)
            ->get();
        $this->assertCount(1, $jobOffers);
        $jobOffer = $jobOffers->first();

        $response->assertRedirect(route('job-offers.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JobOfferController::class,
            'update',
            \App\Http\Requests\JobOfferUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $jobOffer = JobOffer::factory()->create();
        $name = $this->faker->name;
        $description = $this->faker->text;
        $salary = $this->faker->word;
        $skills = $this->faker->word;
        $city = $this->faker->city;

        $response = $this->put(route('job-offer.update', $jobOffer), [
            'name' => $name,
            'description' => $description,
            'salary' => $salary,
            'skills' => $skills,
            'city' => $city,
        ]);

        $jobOffer->refresh();

        $response->assertRedirect(route('job-offers.index'));
        $response->assertOk();
        $response->assertViewIs('job-offers.update');
        $response->assertViewHas('jobOffer');

        $this->assertEquals($name, $jobOffer->name);
        $this->assertEquals($description, $jobOffer->description);
        $this->assertEquals($salary, $jobOffer->salary);
        $this->assertEquals($skills, $jobOffer->skills);
        $this->assertEquals($city, $jobOffer->city);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $jobOffer = JobOffer::factory()->create();

        $response = $this->delete(route('job-offer.destroy', $jobOffer));

        $this->assertModelMissing($jobOffer);
    }
}
