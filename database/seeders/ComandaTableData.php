<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ComandaTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //DB::table('comanda')->delete();

        if(DB::table('comanda')->count() == 0) {
            DB::table('comanda')->insert([
                ['cantitate' => 2, 'id_comanda' => 1, 'id_produs' => 1, 'id_tip_produs' => 1, 'pretComanda' => 40]
            ]);
        }
    }
}
