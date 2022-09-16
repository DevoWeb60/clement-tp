<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
use App\Models\Contact;
use App\Models\JobOffer;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CandidateStatesSeeder::class,
            DeliveriesSeeder::class,
            ContactObjectSeeder::class,
            PageMenuSeeder::class,
            SiteInfoSeeder::class,
            ServicesSeeder::class,
            PageContentSeeder::class,
        ]);

        User::factory(1)->create();
        JobOffer::factory(7)->create();
        Newsletter::factory(21)->create();
        Contact::factory(22)->create();
        Candidate::factory(18)->create();
    }
}
