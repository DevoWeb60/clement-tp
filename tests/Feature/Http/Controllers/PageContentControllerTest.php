<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PageContentController
 */
class PageContentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $pageContents = PageContent::factory()->count(3)->create();

        $response = $this->get(route('page-content.index'));

        $response->assertOk();
        $response->assertViewIs('page-content.index');
        $response->assertViewHas('delivery');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('page-content.create'));

        $response->assertOk();
        $response->assertViewIs('page-content.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PageContentController::class,
            'store',
            \App\Http\Requests\PageContentStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $content = $this->faker->paragraphs(3, true);
        $section_name = $this->faker->word;
        $link = $this->faker->word;
        $image = $this->faker->word;

        $response = $this->post(route('page-content.store'), [
            'content' => $content,
            'section_name' => $section_name,
            'link' => $link,
            'image' => $image,
        ]);

        $pageContents = PageContent::query()
            ->where('content', $content)
            ->where('section_name', $section_name)
            ->where('link', $link)
            ->where('image', $image)
            ->get();
        $this->assertCount(1, $pageContents);
        $pageContent = $pageContents->first();

        $response->assertRedirect(route('page-content.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PageContentController::class,
            'update',
            \App\Http\Requests\PageContentUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $pageContent = PageContent::factory()->create();
        $content = $this->faker->paragraphs(3, true);
        $section_name = $this->faker->word;
        $link = $this->faker->word;
        $image = $this->faker->word;

        $response = $this->put(route('page-content.update', $pageContent), [
            'content' => $content,
            'section_name' => $section_name,
            'link' => $link,
            'image' => $image,
        ]);

        $pageContent->refresh();

        $response->assertRedirect(route('page-content.index'));
        $response->assertOk();
        $response->assertViewIs('page-content.update');
        $response->assertViewHas('pageContent');

        $this->assertEquals($content, $pageContent->content);
        $this->assertEquals($section_name, $pageContent->section_name);
        $this->assertEquals($link, $pageContent->link);
        $this->assertEquals($image, $pageContent->image);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $pageContent = PageContent::factory()->create();

        $response = $this->delete(route('page-content.destroy', $pageContent));

        $this->assertModelMissing($pageContent);
    }
}
