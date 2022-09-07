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
            'google_link' => 'https://goo.gl/maps/tVVyrgTwktBFfZm4A',
            'logo' => "svg/logo.svg",
            'favicon' => "png/favicon.png",
            'facebook' => "https://facebook.com",
            'instagram' => "https://instagram.com",
            'linkedin' => "https://linkedin.com",
            'pinterest' => "https://pinterest.com",
            'iframe_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.0750510170487!2d2.6347574158671803!3d49.25602338058002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e63229bad57551%3A0xc04ce777d04fcf33!2s9%20Rue%20de%20la%20For%C3%AAt%2C%2060810!5e0!3m2!1sfr!2sfr!4v1662470113882!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
