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

        DB::table('page_contents')->insert([
            // HOME
            [
                'title' => 'De la conception à la réalisation',
                'content' => 'Clément TP opère selon un modèle de conception et de construction, agissant en tant qu’architecte, entrepreneur et gestionnaire de projet. Notre portefeuille comprend quelques-unes des adresses les plus prestigieuses de l’Oise et va des extensions aux rénovations jusqu’aux nouvelles constructions.',
                'image' => 'webp/about-worker.webp',
                'link' => "$url/a-propos",
                'link_text' => "Qui sommes nous ?",
                'section_name' => "home-about",
                'page_name' => "home",
            ],
            [
                'title' => 'Nos services',
                'content' => 'Nous sommes fiers du niveau amélioré de service personnalisé que nous offrons à nos clients, en particulier en ce qui concerne la réalisation de tous les aspects du brief et du budget. Nous nous efforçons d’atteindre uniquement les normes les plus élevées de conception et de construction, indépendamment de l’échelle et de la complexité.',
                'image' => 'webp/visualisation.webp',
                'link' => "$url/services",
                'link_text' => null,
                'section_name' => "home-presentation",
                'page_name' => "home",
            ],
            [
                'title' => 'Nos projets',
                'content' => 'Clément TP opère selon un modèle de conception et de construction, agissant en tant qu’architecte, entrepreneur et gestionnaire de projet. Notre portefeuille comprend quelques-unes des adresses les plus prestigieuses de l’Oise et va des extensions aux rénovations jusqu’aux nouvelles constructions.',
                'image' => 'webp/projects.webp',
                'link' => "$url/projets",
                'link_text' => null,
                'section_name' => "home-presentation",
                'page_name' => "home",
            ],
            // ABOUT
            [
                'title' => 'Qui sommes nous ?',
                'content' => 'Clément TP opère selon un modèle de conception et de construction, agissant en tant qu’architecte, entrepreneur et gestionnaire de projet. Notre portefeuille comprend quelques-unes des adresses les plus prestigieuses de l’Oise et va des extensions aux rénovations jusqu’aux nouvelles constructions.',
                'image' => 'webp/about-worker.webp',
                'link' => null,
                'link_text' => null,
                'section_name' => "about-main",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre philosophie',
                'content' => 'A REMPLIR',
                'image' => null,
                'link' => null,
                'link_text' => null,
                'section_name' => "about-content",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre histoire',
                'content' => 'A REMPLIR',
                'image' => null,
                'link' => null,
                'link_text' => null,
                'section_name' => "about-content",
                'page_name' => "about",
            ],
            [
                'title' => 'Notre expertise',
                'content' => 'A REMPLIR',
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
