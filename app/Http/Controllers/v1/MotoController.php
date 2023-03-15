<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMotoRequest;
use App\Http\Resources\MotoResource;
use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index(){
        return MotoResource::collection(Moto::paginate(10));
    }

    public function store(StoreMotoRequest $request){
        if($request->validated()){
            Moto::create([
                'name' => $request->racer_name,
                'team' => $request->team_name,
                'country' => $request->country_name,
            ]);
        }

        return response()->json([
            'message' => 'Racer Stored.',
            'status' => 200
        ],200);
    }

    public function show(Moto $moto){
        return MotoResource::make($moto);
    }

    public function destroy(Moto $moto){
        $moto->delete();
        return response()->json('Racer Deleted');
    }

    public function update(Moto $moto,Request $request){
        dd($request->all());
        $update_data = [
            "name" => $request->edit_racer_name,
            "team" => $request->edit_team_name,
            "country" => $request->edit_country_name,
        ];
        $moto->update($update_data);
        return response()->json('Racer Updated.');
    }
}
