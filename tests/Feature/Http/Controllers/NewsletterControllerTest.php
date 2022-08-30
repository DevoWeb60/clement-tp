<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\NewsletterController
 */
class NewsletterControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $newsletters = Newsletter::factory()->count(3)->create();

        $response = $this->get(route('newsletter.index'));

        $response->assertOk();
        $response->assertViewIs('newsletters.index');
        $response->assertViewHas('newsletters');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\NewsletterController::class,
            'store',
            \App\Http\Requests\NewsletterStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $email = $this->faker->safeEmail;

        $response = $this->post(route('newsletter.store'), [
            'email' => $email,
        ]);

        $newsletters = Newsletter::query()
            ->where('email', $email)
            ->get();
        $this->assertCount(1, $newsletters);
        $newsletter = $newsletters->first();

        $response->assertRedirect(route('newsletters.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\NewsletterController::class,
            'update',
            \App\Http\Requests\NewsletterUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $newsletter = Newsletter::factory()->create();
        $email = $this->faker->safeEmail;

        $response = $this->put(route('newsletter.update', $newsletter), [
            'email' => $email,
        ]);

        $newsletter->refresh();

        $response->assertRedirect(route('newsletters.index'));
        $response->assertOk();
        $response->assertViewIs('newsletters.update');
        $response->assertViewHas('newsletter');

        $this->assertEquals($email, $newsletter->email);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $newsletter = Newsletter::factory()->create();

        $response = $this->delete(route('newsletter.destroy', $newsletter));

        $this->assertModelMissing($newsletter);
    }
}
