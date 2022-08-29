<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CandidateController
 */
class CandidateControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $candidates = Candidate::factory()->count(3)->create();

        $response = $this->get(route('candidate.index'));

        $response->assertOk();
        $response->assertViewIs('candidates.index');
        $response->assertViewHas('candidate');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $candidate = Candidate::factory()->create();

        $response = $this->get(route('candidate.show', $candidate));

        $response->assertOk();
        $response->assertViewIs('candidate.show');
        $response->assertViewHas('candidate');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('candidate.create'));

        $response->assertOk();
        $response->assertViewIs('candidates.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CandidateController::class,
            'store',
            \App\Http\Requests\CandidateStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $email = $this->faker->safeEmail;
        $message = $this->faker->text;
        $file = $this->faker->word;
        $phone = $this->faker->phoneNumber;
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;

        $response = $this->post(route('candidate.store'), [
            'email' => $email,
            'message' => $message,
            'file' => $file,
            'phone' => $phone,
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);

        $candidates = Candidate::query()
            ->where('email', $email)
            ->where('message', $message)
            ->where('file', $file)
            ->where('phone', $phone)
            ->where('firstname', $firstname)
            ->where('lastname', $lastname)
            ->get();
        $this->assertCount(1, $candidates);
        $candidate = $candidates->first();

        $response->assertRedirect(route('candidates.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CandidateController::class,
            'update',
            \App\Http\Requests\CandidateUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $candidate = Candidate::factory()->create();
        $email = $this->faker->safeEmail;
        $message = $this->faker->text;
        $file = $this->faker->word;
        $phone = $this->faker->phoneNumber;
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;

        $response = $this->put(route('candidate.update', $candidate), [
            'email' => $email,
            'message' => $message,
            'file' => $file,
            'phone' => $phone,
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);

        $candidate->refresh();

        $response->assertRedirect(route('candidates.index'));
        $response->assertOk();
        $response->assertViewIs('candidate.update');
        $response->assertViewHas('candidate');

        $this->assertEquals($email, $candidate->email);
        $this->assertEquals($message, $candidate->message);
        $this->assertEquals($file, $candidate->file);
        $this->assertEquals($phone, $candidate->phone);
        $this->assertEquals($firstname, $candidate->firstname);
        $this->assertEquals($lastname, $candidate->lastname);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $candidate = Candidate::factory()->create();

        $response = $this->delete(route('candidate.destroy', $candidate));

        $this->assertModelMissing($candidate);
    }
}
