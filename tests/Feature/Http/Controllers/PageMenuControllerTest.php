<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\PageMenu;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PageMenuController
 */
class PageMenuControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $pageMenus = PageMenu::factory()->count(3)->create();

        $response = $this->get(route('page-menu.index'));

        $response->assertOk();
        $response->assertViewIs('page-menu.index');
        $response->assertViewHas('pageMenu');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('page-menu.create'));

        $response->assertOk();
        $response->assertViewIs('page-menu.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PageMenuController::class,
            'store',
            \App\Http\Requests\PageMenuStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $position = $this->faker->word;

        $response = $this->post(route('page-menu.store'), [
            'name' => $name,
            'position' => $position,
        ]);

        $pageMenus = PageMenu::query()
            ->where('name', $name)
            ->where('position', $position)
            ->get();
        $this->assertCount(1, $pageMenus);
        $pageMenu = $pageMenus->first();

        $response->assertRedirect(route('page-menu.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PageMenuController::class,
            'update',
            \App\Http\Requests\PageMenuUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $pageMenu = PageMenu::factory()->create();
        $name = $this->faker->name;
        $position = $this->faker->word;

        $response = $this->put(route('page-menu.update', $pageMenu), [
            'name' => $name,
            'position' => $position,
        ]);

        $pageMenu->refresh();

        $response->assertRedirect(route('page-menu.index'));
        $response->assertOk();
        $response->assertViewIs('page-menu.update');
        $response->assertViewHas('pageMenu');

        $this->assertEquals($name, $pageMenu->name);
        $this->assertEquals($position, $pageMenu->position);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $pageMenu = PageMenu::factory()->create();

        $response = $this->delete(route('page-menu.destroy', $pageMenu));

        $this->assertModelMissing($pageMenu);
    }
}
