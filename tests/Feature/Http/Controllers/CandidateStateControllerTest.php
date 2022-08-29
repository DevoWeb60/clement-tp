<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CandidateState;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CandidateStateController
 */
class CandidateStateControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $candidateStates = CandidateState::factory()->count(3)->create();

        $response = $this->get(route('candidate-state.index'));

        $response->assertOk();
        $response->assertViewIs('candidate-state.index');
        $response->assertViewHas('candidateStates');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('candidate-state.create'));

        $response->assertOk();
        $response->assertViewIs('candidate-state.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CandidateStateController::class,
            'store',
            \App\Http\Requests\CandidateStateStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('candidate-state.store'), [
            'name' => $name,
        ]);

        $candidateStates = CandidateState::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $candidateStates);
        $candidateState = $candidateStates->first();

        $response->assertRedirect(route('candidate-state.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CandidateStateController::class,
            'update',
            \App\Http\Requests\CandidateStateUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $candidateState = CandidateState::factory()->create();
        $name = $this->faker->name;

        $response = $this->put(route('candidate-state.update', $candidateState), [
            'name' => $name,
        ]);

        $candidateState->refresh();

        $response->assertRedirect(route('candidate-state.index'));
        $response->assertOk();
        $response->assertViewIs('candidate-state.update');
        $response->assertViewHas('candidateState');

        $this->assertEquals($name, $candidateState->name);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $candidateState = CandidateState::factory()->create();

        $response = $this->delete(route('candidate-state.destroy', $candidateState));

        $this->assertModelMissing($candidateState);
    }
}
