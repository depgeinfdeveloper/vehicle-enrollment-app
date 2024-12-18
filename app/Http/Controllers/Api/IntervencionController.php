<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Intervencion;
use Illuminate\Http\Request;

class IntervencionController extends Controller
{



    public function listCrewMembers(Intervencion $intervention)
    {
        $crewMembers = $intervention->tripulates()->get();
        return response()->json($crewMembers);
    }

    public function listUseDetails(Intervencion $intervention)
    {
        $useDetails = $intervention
            ->tiposDeUso()
            ->get();
        return response()->json($useDetails);
    }
}
