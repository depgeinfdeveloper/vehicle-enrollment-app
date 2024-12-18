<?php

use App\Http\Controllers\Api\IntervencionController;
use App\Http\Controllers\Api\VehiculoFormalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('Auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::get('/intervention', [IntervencionController::class, 'list']);
    Route::get('/intervention-crew-members/{intervention}', [IntervencionController::class, 'listCrewMembers']);
    Route::get('/intervention-use-details/{intervention}', [IntervencionController::class, 'listUseDetails']);

    Route::get('/vehicle-formal', [VehiculoFormalController::class, 'listar']);

    Route::get('/vehicle-formal/{placa}', [VehiculoFormalController::class, 'listByPlate']);
});

