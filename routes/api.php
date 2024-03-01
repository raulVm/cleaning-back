<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cat\CatalogoController;
use App\Http\Controllers\SolicitudesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/catalogo/estados', [CatalogoController::class, 'getEstados']);
Route::get('catalogo/municipios/{id}', [CatalogoController::class, 'getMunicipios']);
Route::get('catalogo/localidades/{cve_edo}/{cve_mun}', [CatalogoController::class, 'getLocalidades']);
Route::get('catalogo/colonias/{cve_edo}/{cve_mun}', [CatalogoController::class, 'getColonias']);

Route::post('saveSolicitud',[SolicitudesController::class, 'saveSolicitud']);

?>