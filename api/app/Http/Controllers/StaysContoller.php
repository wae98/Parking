<?php

namespace App\Http\Controllers;

use App\Models\Stay;
use Illuminate\Http\Request;

class StaysContoller extends Controller
{

    public function index()
    {
        $stay = Stay::all();
        return $stay;
    }


    public function store(Request $request)
    {
        $stay = new Stay();
        $stay->matricula = $request->matricula;
        $stay->vehicle_type_id= $request->vehicle_type_id;
        $stay->entry_time = $request->entry_time;
        $stay->departure_time = $request->departure_time;
        $stay->acumulated_time = $request->acumulated_time;
        $stay->save();
    }


    public function show(string $id)
    {
        $stay = Stay::find($id);
        return $stay;
    }


    public function update(Request $request,$id)
    {
        $stay = Stay::findOrFail($id);
        $stay->matricula = $request->matricula;
        $stay->vehicle_type_id= $request->vehicle_type_id;
        $stay->entry_time = $request->entry_time;
        $stay->departure_time = $request->departure_time;
        $stay->acumulated_time = $request->acumulated_time;
        $stay->save();
        return $stay;
    }

    public function destroy($id)
    {
        $stay = Stay::destroy($id);
        return $stay;
    }
}
