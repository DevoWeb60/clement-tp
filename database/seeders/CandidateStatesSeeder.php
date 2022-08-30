<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CandidateStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidate_states')->insert([
            [
                'name' => 'En attente'
            ],
            [
                'name' => 'A contacter'
            ],
            [
                'name' => 'En cours'
            ],
            [
                'name' => 'Terminé'
            ],
            [
                'name' => 'Refusé'
            ],
            [
                'name' => 'Entretien'
            ]
        ]);
    }
}
