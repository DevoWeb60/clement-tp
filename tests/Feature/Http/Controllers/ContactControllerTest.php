<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ContactController
 */
class ContactControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $contacts = Contact::factory()->count(3)->create();

        $response = $this->get(route('contact.index'));

        $response->assertOk();
        $response->assertViewIs('contacts.index');
        $response->assertViewHas('contact');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $contact = Contact::factory()->create();

        $response = $this->get(route('contact.show', $contact));

        $response->assertOk();
        $response->assertViewIs('contact.show');
        $response->assertViewHas('contact');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('contact.create'));

        $response->assertOk();
        $response->assertViewIs('contacts.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ContactController::class,
            'store',
            \App\Http\Requests\ContactStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $message = $this->faker->text;
        $phone = $this->faker->phoneNumber;
        $email = $this->faker->safeEmail;

        $response = $this->post(route('contact.store'), [
            'name' => $name,
            'message' => $message,
            'phone' => $phone,
            'email' => $email,
        ]);

        $contacts = Contact::query()
            ->where('name', $name)
            ->where('message', $message)
            ->where('phone', $phone)
            ->where('email', $email)
            ->get();
        $this->assertCount(1, $contacts);
        $contact = $contacts->first();

        $response->assertRedirect(route('contacts.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ContactController::class,
            'update',
            \App\Http\Requests\ContactUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $contact = Contact::factory()->create();
        $name = $this->faker->name;
        $message = $this->faker->text;
        $phone = $this->faker->phoneNumber;
        $email = $this->faker->safeEmail;

        $response = $this->put(route('contact.update', $contact), [
            'name' => $name,
            'message' => $message,
            'phone' => $phone,
            'email' => $email,
        ]);

        $contact->refresh();

        $response->assertRedirect(route('contacts.index'));
        $response->assertOk();
        $response->assertViewIs('contact.update');
        $response->assertViewHas('contact');

        $this->assertEquals($name, $contact->name);
        $this->assertEquals($message, $contact->message);
        $this->assertEquals($phone, $contact->phone);
        $this->assertEquals($email, $contact->email);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $contact = Contact::factory()->create();

        $response = $this->delete(route('contact.destroy', $contact));

        $this->assertModelMissing($contact);
    }
}
