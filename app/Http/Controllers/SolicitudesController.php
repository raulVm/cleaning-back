<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Models\Solicitud;

use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function saveSolicitud(Request $request){
        try{
            // dd($request);
            $nuevaSolicitud = new saveSolicitud;
    
            $nuevaSolicitud->nombre_completo       = $request['nombre_completo'];
            $nuevaSolicitud->correo_electronico    = $request['correo_electronico'];
            $nuevaSolicitud->telefono              = $request['telefono'];
            $nuevaSolicitud->id_estado             = $request['id_estado']['id'];
            $nuevaSolicitud->id_municipio          = $request['id_municipio']['cve_mun'];
            $nuevaSolicitud->id_localidad          = $request['id_localidad']['cve_loc'];
            $nuevaSolicitud->id_colonia            = $request['id_colonia']['id'];
            $nuevaSolicitud->servicio              = $request['servicio'];
            $nuevaSolicitud->descripcion           = $request['descripcion'];
            $nuevaSolicitud->save();
            return response()->json(['message' => 'Datos guardados correctamente'],200);
        }catch(\PDOException $e){
            return response()->json(['message' => $e->getMessage()],500);
        }
    }
}
