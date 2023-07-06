<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComandaController extends Controller
{
    public function index() {
        $comanda = Comanda::all();
        if($comanda->count()>0){
            return response()->json([
                'status'=> 200,
                'comanda'=> $comanda
            ], 200);
        }
        else {
            return response()->json([
                'status'=> 404,
                'message' => 'No Records Found'
            ], 404);
        }
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'cantitate'=> 'required',
            'id_comanda'=> 'required',
            'id_produs'=> 'required',
            'id_tip_produs' =>'required',
            'pretComanda'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>442,
                'errors'=>$validator->messages(),
            ], 422);
        }
        else{
            $comanda=Comanda::create([
                'cantitate'   => $request->cantitate,
                'id_comanda' => $request->id_comanda,
                'id_produs' => $request->id_produs,
                'id_tip_produs'=>$request->id_tip_produs,
                'pretComanda'=> $request->pretComanda,
            ]);
            if($comanda){
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
            'cantitate'=> 'required',
            'id_comanda'=> 'required',
            'id_produs'=> 'required',
            'id_tip_produs' =>'required',
            'pretComanda'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>442,
                'errors'=>$validator->messages(),
            ], 422);
        }
        else{
            $comanda=Comanda::find($id);

            if($comanda){
                $comanda=Comanda::update([
                    'cantitate'   => $request->cantitate,
                    'id_comanda' => $request->id_comanda,
                    'id_produs' => $request->id_produs,
                    'id_tip_produs'=>$request->id_tip_produs,
                    'pretComanda'=> $request->pretComanda,
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
    }

}
