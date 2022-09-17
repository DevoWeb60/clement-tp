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
                'description' => "Nous proposons un service architectural complet comprenant les projets résidentiels, commerciaux et industriels. 
                Notre équipe de conception comprend des professionnels chevronnés qui facilitent tous les processus nécessaires.
                
                Le processus de conception comporte des études de site, un plan de développement conceptuel et une visualisation 3D.Après la finalisation de la conception, les demandes de planification, les approbations de contrôle du bâtiment et les dossiers d’appel d’offres sont soumis et les dessins techniques de construction sont produits.",
                'professionnal' => "Nous proposons un service architectural complet comprenant les projets résidentiels, commerciaux et industriels. 
                Notre équipe de conception comprend des professionnels chevronnés qui facilitent tous les processus nécessaires.
                
                Le processus de conception comporte des études de site, un plan de développement conceptuel et une visualisation 3D.Après la finalisation de la conception, les demandes de planification, les approbations de contrôle du bâtiment et les dossiers d’appel d’offres sont soumis et les dessins techniques de construction sont produits.",
                'image' => 'webp/plan.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Nouvelle Construction',
                'description' => "Nous garantissons un service professionnel et fiable et la meilleure qualité de production. 
                Notre équipe, à l'écoute de nos clients, travaille à la concrétisation de votre projet en tenant compte de toutes les variables comme le budget et les délais.",
                'professionnal' => "Nous garantissons un service professionnel et fiable et la meilleure qualité de production. 
                Notre équipe, à l'écoute de nos clients, travaille à la concrétisation de votre projet en tenant compte de toutes les variables comme le budget et les délais.",
                'image' => 'webp/new-construction.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Extensions',
                'description' => "Les extensions peuvent accroître la taille et les fonctionnalités de votre maison. 
Ce sont des solutions de rechange abordables et moins perturbatrices aux déménagements. Le principal facteur à considérer ici est les directives de développement local. 
Celles-ci peuvent varier considérablement d’un arrondissement à l’autre.",
                'professionnal' => "Les extensions peuvent accroître la taille et les fonctionnalités de votre maison. 
Ce sont des solutions de rechange abordables et moins perturbatrices aux déménagements. Le principal facteur à considérer ici est les directives de développement local. 
Celles-ci peuvent varier considérablement d’un arrondissement à l’autre.",
                'image' => 'webp/extensions.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Aménagements',
                'description' => "Une autre solution gain de place. 
                Nous avons eu un grand succès dans les conversions de loft que nous avons réalisées à ce jour. 
                Les clients ont été ravis des résultats, surpris par les gains supplémentaires de lumière et d’espace.",
                'professionnal' => "Clément TP possède une vaste expérience dans les Hauts-de-France, ayant réalisé plusieurs projets d’aménagement de magasins dans les secteurs commercial et industriel. 
                Il consiste à vous accompagner dans votre projet de mise en place de différent mobilier tel que une cuisine, vitrine, un entrepôt. ",
                'image' => 'webp/move-house.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Rénovation',
                'description' => "Les rénovations visent à maximiser l’utilisation spatiale et le fonctionnement des logements existants. 
                Nous offrons des conseils d’experts sur la meilleure façon d’atteindre ces résultats, dans le cadre d’un budget spécifié, 
                qu’il s’agisse de rénover un aménagement existant, d’installer de nouvelles cuisines, salles de bains ou simplement de moderniser la propriété en vue de la vente.
                Nous proposons des solutions de design d’intérieur professionnelles.",
                'professionnal' => "Les rénovations commerciales sont un moyen efficace de dynamiser ou de renommer une entreprise. 
                Nos concepteurs experts et notre équipe de gestion de projet peuvent vous assister dans la rénovation de tout local commercial, avec une solution de conception et un programme de construction sur mesure, adaptés aux besoins opérationnels de votre entreprise. Pour maximiser la commodité.
                
                Nous sommes en mesure d’effectuer la construction pendant les heures de fermeture afin d’assurer le moins de perturbations possible et, ce faisant, de protéger votre personnel, vos clients et vos actifs.",
                'image' => 'webp/renovations.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Maintenance',
                'description' => "Qu’il s’agisse d’un petit projet résidentiel ou d’un grand immeuble, 
                nous offrons à tous nos clients la même approche en matière de qualité et de service.
                Notre service complet est soutenu par un service d’assistance 24 heures sur 24 
                et un service d’assistance d’urgence à réponse rapide.
                 
                Nous garantissons qu’un ingénieur sera avec vous dans les 24 heures.
                Veuillez appeler notre chef de projet au 04.22.52.10.10 pour discuter de tout projet de maintenance potentiel 
                ou utilisez notre page Contact pour envoyer vos besoins.",
                'professionnal' => "Qu’il s’agisse d’un petit projet résidentiel ou d’un grand immeuble, 
                nous offrons à tous nos clients la même approche en matière de qualité et de service.
                Notre service complet est soutenu par un service d’assistance 24 heures sur 24 
                et un service d’assistance d’urgence à réponse rapide.
                 
                Nous garantissons qu’un ingénieur sera avec vous dans les 24 heures.
                Veuillez appeler notre chef de projet au 04.22.52.10.10 pour discuter de tout projet de maintenance potentiel 
                ou utilisez notre page Contact pour envoyer vos besoins.",
                'image' => 'webp/maintenance.webp',
                'type' => 'construction'
            ],
            [
                'name' => 'Sous sol',
                'description' => "L’excavation pour introduire un sous-sol est une solution pratique pour générer un espace de vie supplémentaire et augmenter la valeur de votre propriété. 
                Cet espace supplémentaire pourrait être utilisé pour un bureau à domicile, une chambre supplémentaire, un home cinéma ou une salle de jeux, entre autres options.",
                'professionnal' => null,
                'image' => 'webp/basement.webp',
                'type' => 'construction'
            ],
            // PROCESS
            [
                'name' => '1 | Sondage',
                'description' => "Enquêtes sur site, relevés de mesure, essais au sol et évaluations structurelles telles que les murs mitoyens. ",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '2 | Contrôle du bâtiment',
                'description' => "Les équipes de contrôle des bâtiments de la Mairie ou la désignation d’un géomètre indépendant.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '3 | La conception',
                'description' => "Notre équipe présentera des solutions de conception uniques dans les délais et les contraintes budgétaires.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '4 | Planification et soumissions',
                'description' => "Clément TP préparera et soumettra toutes les demandes de permis de construire ou de développement autorisé, en votre nom.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '5 | Ingéniérie structurelle',
                'description' => "Calculs et méthodes de construction : Ceci est requis pour le contrôle du bâtiment et pour les discussions sur les murs mitoyens.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '6 | Dessins de construction',
                'description' => "Clément TP produira tous les dessins à remettre à l’équipe de construction sur place.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '7 | Portée des travaux',
                'description' => "Détails du projet, programme de construction et chiffrage.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '8 | Contrat et dépôt',
                'description' => "Suite aux frais de construction convenus, un contrat est signé.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '9 | Pré-démarrage',
                'description' => "Rencontre avec l’équipe : Présentation des chefs de projet et de site.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '10 | La construction',
                'description' => "Suivez les règlements de construction et les protocoles de santé et de sécurité.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '11 | Gestion des projets',
                'description' => "Réunions hebdomadaires, visites de sites et mises à jour du programme.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '12 | Achèvement pratique',
                'description' => "Contrôle rigoureux des travaux achevés et réception.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
            [
                'name' => '13 | Période de conservation',
                'description' => "Pendant 3 à 6 mois nous effectuerons des visites de chantier et un nous établirons programme de correction des vices cachés.",
                'professionnal' => null,
                'image' => null,
                'type' => 'processus'
            ],
        ]);
    }
}
