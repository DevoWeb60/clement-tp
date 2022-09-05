<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_infos')->insert([
            'description' => "Clément TP (Clément Construction) est une entreprise dans le bâtiment basé dans les Haut de France. Rénovation, construction, architecture.",
            'title' => "Clément Construction",
            'phone' => "06 66 27 33 99",
            'email' => "contact@clement-tp.fr",
            'address' => "9 Rue de la Forêt, 60810, La Roue Qui Tourne",
            'google_link' => 'https://goo.gl/maps/1vZFREht4R8dacRp8',
            'logo' => "svg/logo.svg",
            'favicon' => "png/favicon.png",
            'facebook' => "https://facebook.com",
            'instagram' => "https://instagram.com",
            'linkedin' => "https://linkedin.com",
            'pinterest' => "https://pinterest.com",
            'iframe_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.3298189946286!2d2.1953062160685444!3d49.421578279346654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7abd9e3f24f87%3A0x94db7b689c205152!2s45b%20Rue%20Saint-Germain%2C%2060510%20Laversines!5e0!3m2!1sfr!2sfr!4v1661761015931!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
