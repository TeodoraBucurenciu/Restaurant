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
        //DB::table('comenzi')->delete();
        if(DB::table('comenzi')->count() == 0) {
            DB::table('comenzi')->insert([
                ['nr_masa' => 5, 'ospatar' => 4],
                ['nr_masa' => 2, 'ospatar' => 6],
                ['nr_masa' => 9, 'ospatar' => 6],
                ['nr_masa' => 8, 'ospatar' => 4],
            ]);
        }
    }
}
