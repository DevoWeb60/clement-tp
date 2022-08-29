<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ServicesController
 */
class ServicesControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $services = Services::factory()->count(3)->create();

        $response = $this->get(route('service.index'));

        $response->assertOk();
        $response->assertViewIs('services.index');
        $response->assertViewHas('service');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('service.create'));

        $response->assertOk();
        $response->assertViewIs('services.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ServicesController::class,
            'store',
            \App\Http\Requests\ServicesStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $customers = $this->faker->text;
        $professionnal = $this->faker->text;
        $image = $this->faker->word;

        $response = $this->post(route('service.store'), [
            'name' => $name,
            'customers' => $customers,
            'professionnal' => $professionnal,
            'image' => $image,
        ]);

        $services = Service::query()
            ->where('name', $name)
            ->where('customers', $customers)
            ->where('professionnal', $professionnal)
            ->where('image', $image)
            ->get();
        $this->assertCount(1, $services);
        $service = $services->first();

        $response->assertRedirect(route('services.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ServicesController::class,
            'update',
            \App\Http\Requests\ServicesUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $service = Services::factory()->create();
        $name = $this->faker->name;
        $customers = $this->faker->text;
        $professionnal = $this->faker->text;
        $image = $this->faker->word;

        $response = $this->put(route('service.update', $service), [
            'name' => $name,
            'customers' => $customers,
            'professionnal' => $professionnal,
            'image' => $image,
        ]);

        $service->refresh();

        $response->assertRedirect(route('services.index'));
        $response->assertOk();
        $response->assertViewIs('services.update');
        $response->assertViewHas('service');

        $this->assertEquals($name, $service->name);
        $this->assertEquals($customers, $service->customers);
        $this->assertEquals($professionnal, $service->professionnal);
        $this->assertEquals($image, $service->image);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $service = Services::factory()->create();
        $service = Service::factory()->create();

        $response = $this->delete(route('service.destroy', $service));

        $this->assertModelMissing($service);
    }
}
