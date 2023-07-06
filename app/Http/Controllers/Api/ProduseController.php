<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produse;


class ProduseController extends Controller
{
    public function index() {
        $produse = Produse::all();
        if($produse->count()>0){
            return response()->json([
                'status'=> 200,
                'produse'=> $produse
            ], 200);
        }
        else {
            return response()->json([
                'status'=> 404,
                'message' => 'No Records Found'
            ], 404);
        }
    }
}
