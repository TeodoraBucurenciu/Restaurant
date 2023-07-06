<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Comenzi;
use Illuminate\Support\Facades\Validator;

class ComenziController extends Controller
{
    public function index() {
        $comenzi = Comenzi::all();
        if($comenzi->count()>0){
            return response()->json([
                'status'=> 200,
                'comenzi'=> $comenzi
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
           'nr_masa' => 'required',
           'ospatar' => 'required',
       ]);
        if($validator->fails()){
            return response()->json([
                'status'=>442,
                'errors'=>$validator->messages(),
            ], 422);
        }
        else{
            $comenzi=Comenzi::create([
                'nr_masa' => $request->nr_masa,
                'ospatar'=> $request->ospatar,
            ]);
            if($comenzi){
                return response()->json([
                    'status'=>200,
                    'message' => 'Creat cu succes'
                ], 200);
            }
            else{
                return response()->json([
                    'status'=>500,
                    'message' => 'A aparut o problema'
                ], 200);
            }
        }
    }
}
