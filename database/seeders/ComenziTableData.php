<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ComenziTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if(DB::table('comenzi')->count() == 0) {
            DB::table('comenzi')->insert([
                ['nr_masa' => 5, 'status_comanda'=>1],
                ['nr_masa' => 2, 'status_comanda'=>1],
                ['nr_masa' => 9, 'status_comanda'=>1],
                ['nr_masa' => 8, 'status_comanda'=>1],
            ]);
        }
    }
}
