<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdministrareTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       // DB::table('administrare')->delete();

        if(DB::table('administrare')->count() == 0) {
            DB::table('administrare')->insert([
                ['username' => 'manager', 'password' => '1a8565a9dc72048ba03b4156be3e569f22771f23', 'type' => 1],
                ['username' => 'bucatar1', 'password' => '1a8565a9dc72048ba03b4156be3e569f22771f23', 'type' => 2],
                ['username' => 'bucatar2', 'password' => '3d7a162cc8651f68fcc2da817c9e2edbc2b883bd', 'type' => 2],
                ['username' => 'ospatar1', 'password' => '9217568b6242a6923987ece46d9a4e885fc802d1', 'type' => 3],
                ['username' => 'ospatar2', 'password' => '6bd1522c75b95189c1a76cfc539031458708fb7a', 'type' => 3],
                ['username' => 'ospatar3', 'password' => 'c8fc3ba2438ef1f47a0dbf42a6f2e303319ba917', 'type' => 3],
            ]);
        }
    }
}
