<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DeliveryController
 */
class DeliveryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $deliveries = Delivery::factory()->count(3)->create();

        $response = $this->get(route('delivery.index'));

        $response->assertOk();
        $response->assertViewIs('deliveries.index');
        $response->assertViewHas('delivery');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('delivery.create'));

        $response->assertOk();
        $response->assertViewIs('deliveries.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DeliveryController::class,
            'store',
            \App\Http\Requests\DeliveryStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $code = $this->faker->word;

        $response = $this->post(route('delivery.store'), [
            'name' => $name,
            'code' => $code,
        ]);

        $deliveries = Delivery::query()
            ->where('name', $name)
            ->where('code', $code)
            ->get();
        $this->assertCount(1, $deliveries);
        $delivery = $deliveries->first();

        $response->assertRedirect(route('deliveries.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DeliveryController::class,
            'update',
            \App\Http\Requests\DeliveryUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $delivery = Delivery::factory()->create();
        $name = $this->faker->name;
        $code = $this->faker->word;

        $response = $this->put(route('delivery.update', $delivery), [
            'name' => $name,
            'code' => $code,
        ]);

        $delivery->refresh();

        $response->assertRedirect(route('deliveries.index'));
        $response->assertOk();
        $response->assertViewIs('delivery.update');
        $response->assertViewHas('delivery');

        $this->assertEquals($name, $delivery->name);
        $this->assertEquals($code, $delivery->code);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $delivery = Delivery::factory()->create();

        $response = $this->delete(route('delivery.destroy', $delivery));

        $this->assertModelMissing($delivery);
    }
}
