<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_objects')->insert([
            [
                'name' => 'Demande de devis',
            ],
            [
                'name' => 'Renseignement',
            ],
            [
                'name' => 'Autre',
            ]
        ]);
    }
}
