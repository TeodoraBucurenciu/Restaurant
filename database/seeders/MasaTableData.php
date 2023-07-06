<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MasaTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       // DB::table('masa')->delete();
        if(DB::table('masa')->count() == 0){
            DB::table('masa')->insert([
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
                ['status_masa'=>1],
            ]);
        }
    }
}
