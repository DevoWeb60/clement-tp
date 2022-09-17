<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'http://clement-tp.test';
        // $url = 'https://tp-clement-tp.devoweb.fr';

        DB::table('page_contents')->insert([
            // HOME
            [
                'title' => 'De la conception à la réalisation',
                'content' => "Clément TP opère selon un modèle de conception et de construction, agissant en tant qu’architecte, entrepreneur et gestionnaire de projet.
                Nous accompagnons nos clients de la conception jusqu'à la réalisation et jouons le rôle d'intermédiaire entre nos client et les constructeurs.
                Notre portefeuille comprend quelques-unes des adresses les plus prestigieuses de l’Oise et va des extensions aux rénovations jusqu’aux nouvelles constructions.",
                'image' => 'webp/about-worker.webp',
                'link' => "$url/a-propos",
                'link_text' => "Qui sommes nous ?",
                'section_name' => "home-about",
                'page_name' => "home",
            ],
            [
                'title' => 'Nos services',
                'content' => "De la nouvelle construction à la rénovation,
                nous proposons un large choix de service pouvant correspondre à projets,
                aussi spécifique qu'il peuvent être.",
                'image' => 'webp/visualisation.webp',
                'link' => "$url/services",
                'link_text' => null,
                'section_name' => "home-presentation",
                'page_name' => "home",
            ],
            [
                'title' => 'Nos projets',
                'content' => "Nos projets sont vos projets.
                Inspirez vous des projets
                de nos clients que nous avons réalisé.",
                'image' => 'webp/projects.webp',
                'link' => "$url/projets",
                'link_text' => null,
                'section_name' => "home-presentation",
                'page_name' => "home",
            ],
            // ABOUT
            [
                'title' => 'Qui sommes nous ?',
                'content' => "Basé à La Roue Qui Tourne dans l'Oise, nous sommes une entreprise dans le domaine du BTP forte de nombreuses années d'expérience.

                Nous offrons une gamme complète de services professionnels dans les secteurs résidentiel, commercial, éducatif et industriel dans le Nord de la France.
                Nous veillons à comprendre les besoins de nos clients et de les traduire en solutions de conception innovantes et durables, exécutées avec la plus grande compétence technique.",
                'image' => 'webp/about-worker.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "about-main",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre philosophie',
                'content' => "Nos services de conception et de construction visent à rationaliser le projet de la conception à la livraison, en éliminant le stress de nos clients devant traiter directement avec les constructeurs. La conception et la construction permettent une structuration efficace des frais, offrant aux clients une solution de construction simple et rentable.

                Chez Clément TP, nous priorisons nos clients et leurs projets, en veillant à ce qu’ils reçoivent l’attention experte de nos architectes et designers d’intérieur innovants.",
                'image' => null,
                'link' => null,
                'link_text' => null,
                'section_name' => "about-content",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre histoire',
                'content' => "Nous avons de nombreuses années d’expérience dans la construction, ayant travaillé avec une gamme de clients sur divers projet.

                Certains de nos travaux comprennent des conversions de lofts, des extensions de maison, des conceptions de rénovation commerciale et des concepts pour de grands projets de développement.",
                'image' => null,
                'link' => null,
                'link_text' => null,
                'section_name' => "about-content",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre expertise',
                'content' => "Les équipes de construction sont soigneusement sélectionnées parmi notre réseau de confiance d’artisans et de spécialistes qualifiés à travers les Hauts-de-France.
                Un chef de projet expérimenté facilite la coordination du projet, en veillant à ce que toutes les réglementations en matière de planification, de santé et de sécurité et de construction soient respectées.
                
                Nous possédons la conception et les compétences techniques pour gérer tous les aspects des projets de construction.",
                'image' => null,
                'link' => null,
                'link_text' => null,
                'section_name' => "about-content",
                'page_name' => "about",
            ],
            // PROJECTS
            [
                'title' => 'Boulangerie & plus ',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets1.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Au bar',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets2.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Nouvelle cuisine',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets3.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Rénovation de salon',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets4.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Aménagement des combles',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets5.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Chambre en sous sol',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets6.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],
            [
                'title' => 'Extension pour salon',
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa placeat quod et perferendis quisquam qui rerum, fugiat aliquid vel at ab, voluptates cumque praesentium eum eos dignissimos reprehenderit, aperiam quam.

                Sunt fugit perferendis, animi consequuntur error consequatur odio dolores, blanditiis quae tenetur est aspernatur officiis. 
                Asperiores culpa expedita possimus sunt, minus optio dignissimos perferendis, quam eligendi nostrum, corrupti quaerat nobis?
                Qui quibusdam temporibus corporis fuga, et repellat inventore iusto! Corporis quod ipsa, dolorem harum eaque amet, tenetur eos facere recusandae minima repudiandae perspiciatis, nisi vitae asperiores ratione hic vero magni?
                Omnis molestias facilis nostrum temporibus asperiores maiores accusamus laborum dolorem voluptates quo, est tempora nam. Qui animi minima, similique quisquam non consequuntur sapiente in. 

                Esse asperiores cumque suscipit eveniet alias.",
                'image' => 'webp/projets7.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "projects-galery",
                'page_name' => "projects",
            ],

        ]);
    }
}
