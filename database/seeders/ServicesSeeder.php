<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            // SERVICE
            [
                'name' => 'Plan technique',
                'description' => null,
                'professionnal' => null,
                'image' => 'webp/plan.webp',
                'type' => 'service'
            ],
            [
                'name' => 'Visualisation 3D',
                'description' => null,
                'professionnal' => null,
                'image' => 'webp/visualisation.webp',
                'type' => 'service'
            ],
            [
                'name' => 'Assistance 24h/24',
                'description' => null,
                'professionnal' => null,
                'image' => 'webp/contact.webp',
                'type' => 'service'
            ],
            // CONSTRUCTIONS
            [
                'name' => 'Architecture',
                'description' => "A REMPLIR",
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/plan.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Nouvelle Construction',
                'description' => "A REMPLIR",
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/new-construction.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Extensions',
                'description' => "A REMPLIR",
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/extensions.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Aménagements',
                'description' => null,
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/move-house.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Rénovation',
                'description' => "A REMPLIR",
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/renovations.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Maintenance',
                'description' => "A REMPLIR",
                'professionnal' => "A REMPLIR PRO",
                'image' => 'webp/maintenance.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Sous sol',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => 'webp/basement.webp',
                'type' => 'construction'
            ],
            // PROCESS
            [
                'name' => 'Sondage',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Contrôle du bâtiment',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'La conception',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Planification et soumissions',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Ingéniérie structurelle',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Dessins de construction',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Portée des travaux',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Contrat et dépôt',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Pré-démarrage',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'La construction',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Gestion des projets',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Achèvement pratique',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => 'Période de conservation',
                'description' => "A REMPLIR",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
        ]);
    }
}
