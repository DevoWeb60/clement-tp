<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_menus')->insert([
            [
                'name' => 'Accueil',
                'header' => false,
                'footer' => false,
                'link' => 'home',
            ],
            [
                'name' => 'Nos services',
                'header' => true,
                'footer' => true,
                'link' => 'services'
            ],
            [
                'name' => 'Nos Projets',
                'header' => true,
                'footer' => true,
                'link' => 'projects'
            ],
            [
                'name' => 'À propos',
                'header' => true,
                'footer' => true,
                'link' => 'about'
            ],
            [
                'name' => 'Recrutement',
                'header' => false,
                'footer' => true,
                'link' => 'jobOffer'
            ],
            [
                'name' => 'Contact',
                'header' => true,
                'footer' => true,
                'link' => 'contact'
            ],
        ]);
    }
}
