<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProduseTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
//        DB::table('produse')->delete();

        if(DB::table('produse')->count() == 0){

            DB::table('produse')->insert([
            ['numeProdus'=>'Cheeseburger cu bacon', 'pret'=>40, 'tipProdus'=>2],
            ['numeProdus'=>'Burger cu pui crocant', 'pret'=>46, 'tipProdus'=>2],
            ['numeProdus'=>'Plant-based burger', 'pret'=>50, 'tipProdus'=>2],
            ['numeProdus'=>'Hot Chili Cheese Beef', 'pret'=>46, 'tipProdus'=>2],
            ['numeProdus'=>'Dublu Bacon & Cheese burger', 'pret'=>50, 'tipProdus'=>2],
            ['numeProdus'=>'Spaghete cu sos de rosii si busuioc', 'pret'=>30, 'tipProdus'=>2],
            ['numeProdus'=>'Batoane de peste cu cartofi prajiți', 'pret'=>29, 'tipProdus'=>2],
            ['numeProdus'=>'Pizza Prosciutto e funghi', 'pret'=>32, 'tipProdus'=>2],
            ['numeProdus'=>'Pizza Diavolo', 'pret'=>33, 'tipProdus'=>2],
            ['numeProdus'=>'Pizza Quattro formaggi con salami', 'pret'=>38, 'tipProdus'=>2],
            ['numeProdus'=>'Pizza Capriciosa', 'pret'=>33, 'tipProdus'=>2],
            ['numeProdus'=>'Pizza Mexicana', 'pret'=>40, 'tipProdus'=>2],
            ['numeProdus'=>'Pui ciuperci à la Crème', 'pret'=>40, 'tipProdus'=>2],
            ['numeProdus'=>'Pui Teriyaki', 'pret'=>39, 'tipProdus'=>2],
            ['numeProdus'=>'Pui cu Bacon Crocant', 'pret'=>38, 'tipProdus'=>2],
            ['numeProdus'=>'Pui Chilli Dulce', 'pret'=>33, 'tipProdus'=>2],
            ['numeProdus'=>'Pui Chilli Iute', 'pret'=>38, 'tipProdus'=>2],
            ['numeProdus'=>'Coca Cola', 'pret'=>12, 'tipProdus'=>1],
            ['numeProdus'=>'Limonada', 'pret'=>15, 'tipProdus'=>1],
            ['numeProdus'=>'Pepsi', 'pret'=>8, 'tipProdus'=>1],
            ['numeProdus'=>'Apa minerala', 'pret'=>10, 'tipProdus'=>1],
            ['numeProdus'=>'Apa plata', 'pret'=>10, 'tipProdus'=>1],
            ['numeProdus'=>'Tangerine Tonic', 'pret'=>18, 'tipProdus'=>1],
            ['numeProdus'=>'Strawberry Mimosa', 'pret'=>18, 'tipProdus'=>1],
            ['numeProdus'=>'Tropical Bellini', 'pret'=>18, 'tipProdus'=>1],
        ]);
            }

    }
}
