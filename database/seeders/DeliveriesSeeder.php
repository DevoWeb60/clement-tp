<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            [
                'name' => 'Collab Rachel et Emilien',
                'code' => 'RACHELETEMILIEN',
                'description' => 'Remise sur une prestation',
                'active' => true,
            ],
            [
                'name' => 'Nouveau client',
                'code' => 'NOUVARCHI',
                'description' => '-5% sur le service d\'architecture',
                'active' => false,
            ],
            [
                'name' => 'Collab Joyca',
                'code' => 'BIZENEUILLE',
                'description' => 'Dépôt de permis gratuit',
                'active' => true,
            ]
        ]);
    }
}
