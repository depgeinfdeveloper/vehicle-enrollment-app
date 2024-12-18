<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VehiculoFormal;
use Illuminate\Http\Request;

class VehiculoFormalController extends Controller
{
    public function list()
    {
        $vehiculos_formales = VehiculoFormal::get();
        return response()->json($vehiculos_formales);
    }

    public function listByPlate(Request $request)
    {

        $vehiculos_formales = VehiculoFormal::query()
        ->with(['intervenciones'])
        ->with(['intervenciones.tripulates'])
        ->with(['intervenciones.tiposDeUso'])
        ->where("placa", $request->placa)
        ->get();

        return response()->json($vehiculos_formales);
    }
}
