<?php

namespace App\Http\Controllers;

use App\Models\VehicleTypes;
use Illuminate\Http\Request;

class VechicleTypeContoller extends Controller
{

    public function index()
    {
        $vehicleTypes = VehicleTypes::all();
        return $vehicleTypes;
    }


    public function store(Request $request)
    {
        $vehicleType = new VehicleTypes();
        $vehicleType->code = $request->code;
        $vehicleType->name = $request->name;
        $vehicleType->tariff = $request->tariff;
        $vehicleType->save();
        return $vehicleType;
    }


    public function show(string $id)
    {
        $vehicleType = VehicleTypes::find($id);
        return $vehicleType;
    }


    public function update(Request $request,$id)
    {
        $vehicleType = VehicleTypes::findOrFail($id);
        $vehicleType->code = $request->code;
        $vehicleType->name = $request->name;
        $vehicleType->tariff = $request->tariff;
        $vehicleType->save();
        return $vehicleType;
    }

    public function destroy($id)
    {
        $vehicleType = VehicleTypes::destroy($id);
        return $vehicleType;
    }
}
