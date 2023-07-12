<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ItemComanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemComandaController extends Controller
{
    public function index($id)
    {
        $item_comanda = ItemComanda::find($id);
        if ($item_comanda->count() > 0) {
            return response()->json([
                'status' => 200,
                'iteme_comanda' => $item_comanda
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found'
            ], 404);
        }
    }

    /*public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'masa'=> 'required',
            'pret'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>442,
                'errors'=>$validator->messages(),
            ], 422);
        }
        else{
            $item_comanda=Comanda::create([
                'masa'   => $request->masa,
                'pret' => $request->pret,
            ]);
            if($item_comanda){
                return response()->json([
                    'status'=>200,
                    'message' => 'Creat cu succes'
                ], 200);
            }
            else{
                return response()->json([
                    'status'=>500,
                    'message' => 'A aparut o problema'
                ], 500);
            }
        }
    }
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'masa'=> 'required',
            'pret'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>442,
                'errors'=>$validator->messages(),
            ], 422);
        }
        else{
            $item_comanda=Item_Comanda::find($id);

            if($item_comanda){
                $comanda=Comanda::update([
                    'masa'   => $request->masa,
                    'pret' => $request->pret,
                ]);

                return response()->json([
                    'status'=>200,
                    'message' => 'Modificat cu succes'
                ], 200);
            }
            else{
                return response()->json([
                    'status'=>404,
                    'message' => 'Nu exista aceasta comanda'
                ], 404);
            }
        }
    }*/
}
