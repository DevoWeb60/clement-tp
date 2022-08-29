<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserController
 */
class UserControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get(route('user.index'));

        $response->assertOk();
        $response->assertViewIs('users.index');
        $response->assertViewHas('users');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('user.create'));

        $response->assertOk();
        $response->assertViewIs('users.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'store',
            \App\Http\Requests\UserStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $password = $this->faker->password;
        $email = $this->faker->safeEmail;

        $response = $this->post(route('user.store'), [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'email' => $email,
        ]);

        $users = User::query()
            ->where('firstname', $firstname)
            ->where('lastname', $lastname)
            ->where('password', $password)
            ->where('email', $email)
            ->get();
        $this->assertCount(1, $users);
        $user = $users->first();

        $response->assertRedirect(route('users.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'update',
            \App\Http\Requests\UserUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $user = User::factory()->create();
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $password = $this->faker->password;
        $email = $this->faker->safeEmail;

        $response = $this->put(route('user.update', $user), [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'email' => $email,
        ]);

        $user->refresh();

        $response->assertRedirect(route('users.index'));
        $response->assertOk();
        $response->assertViewIs('users.update');
        $response->assertViewHas('user');

        $this->assertEquals($firstname, $user->firstname);
        $this->assertEquals($lastname, $user->lastname);
        $this->assertEquals($password, $user->password);
        $this->assertEquals($email, $user->email);
    }
}
