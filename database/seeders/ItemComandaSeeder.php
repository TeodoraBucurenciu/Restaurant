<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ItemComandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if(DB::table('iteme_comanda')->count() == 0) {
            DB::table('iteme_comanda')->insert([
                ['cantitate'=>0, 'id_produs'=>0,'id_comanda'=> 0]
            ]);
        }
    }
}
