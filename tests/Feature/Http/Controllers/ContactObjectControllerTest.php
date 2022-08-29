<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\ContactObject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ContactObjectController
 */
class ContactObjectControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $contactObjects = ContactObject::factory()->count(3)->create();

        $response = $this->get(route('contact-object.index'));

        $response->assertOk();
        $response->assertViewIs('contact-objects.index');
        $response->assertViewHas('contactObject');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('contact-object.create'));

        $response->assertOk();
        $response->assertViewIs('contact-objects.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ContactObjectController::class,
            'store',
            \App\Http\Requests\ContactObjectStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('contact-object.store'), [
            'name' => $name,
        ]);

        $contactObjects = ContactObject::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $contactObjects);
        $contactObject = $contactObjects->first();

        $response->assertRedirect(route('contact-objects.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ContactObjectController::class,
            'update',
            \App\Http\Requests\ContactObjectUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $contactObject = ContactObject::factory()->create();
        $name = $this->faker->name;

        $response = $this->put(route('contact-object.update', $contactObject), [
            'name' => $name,
        ]);

        $contactObject->refresh();

        $response->assertRedirect(route('contact-objects.index'));
        $response->assertOk();
        $response->assertViewIs('contact-objects.update');
        $response->assertViewHas('contactObject');

        $this->assertEquals($name, $contactObject->name);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $contactObject = ContactObject::factory()->create();

        $response = $this->delete(route('contact-object.destroy', $contactObject));

        $this->assertModelMissing($contactObject);
    }
}
