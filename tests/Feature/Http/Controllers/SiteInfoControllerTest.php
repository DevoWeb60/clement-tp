<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SiteInfoController
 */
class SiteInfoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $siteInfos = SiteInfo::factory()->count(3)->create();

        $response = $this->get(route('site-info.index'));

        $response->assertOk();
        $response->assertViewIs('site-info.index');
        $response->assertViewHas('siteInfo');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('site-info.create'));

        $response->assertOk();
        $response->assertViewIs('site-infos.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SiteInfoController::class,
            'store',
            \App\Http\Requests\SiteInfoStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $description = $this->faker->text;
        $title = $this->faker->sentence(4);
        $phone = $this->faker->phoneNumber;
        $address = $this->faker->word;
        $email = $this->faker->safeEmail;
        $logo = $this->faker->word;
        $favicon = $this->faker->word;

        $response = $this->post(route('site-info.store'), [
            'description' => $description,
            'title' => $title,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'logo' => $logo,
            'favicon' => $favicon,
        ]);

        $siteInfos = SiteInfo::query()
            ->where('description', $description)
            ->where('title', $title)
            ->where('phone', $phone)
            ->where('address', $address)
            ->where('email', $email)
            ->where('logo', $logo)
            ->where('favicon', $favicon)
            ->get();
        $this->assertCount(1, $siteInfos);
        $siteInfo = $siteInfos->first();

        $response->assertRedirect(route('site-infos.index'));
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SiteInfoController::class,
            'update',
            \App\Http\Requests\SiteInfoUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_displays_view_and_redirects()
    {
        $siteInfo = SiteInfo::factory()->create();
        $description = $this->faker->text;
        $title = $this->faker->sentence(4);
        $phone = $this->faker->phoneNumber;
        $address = $this->faker->word;
        $email = $this->faker->safeEmail;
        $logo = $this->faker->word;
        $favicon = $this->faker->word;

        $response = $this->put(route('site-info.update', $siteInfo), [
            'description' => $description,
            'title' => $title,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'logo' => $logo,
            'favicon' => $favicon,
        ]);

        $siteInfo->refresh();

        $response->assertRedirect(route('site-infos.index'));
        $response->assertOk();
        $response->assertViewIs('site-infos.update');
        $response->assertViewHas('siteInfo');

        $this->assertEquals($description, $siteInfo->description);
        $this->assertEquals($title, $siteInfo->title);
        $this->assertEquals($phone, $siteInfo->phone);
        $this->assertEquals($address, $siteInfo->address);
        $this->assertEquals($email, $siteInfo->email);
        $this->assertEquals($logo, $siteInfo->logo);
        $this->assertEquals($favicon, $siteInfo->favicon);
    }


    /**
     * @test
     */
    public function destroy_deletes()
    {
        $siteInfo = SiteInfo::factory()->create();

        $response = $this->delete(route('site-info.destroy', $siteInfo));

        $this->assertModelMissing($siteInfo);
    }
}
