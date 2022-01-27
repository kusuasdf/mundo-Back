<?php

namespace App\Http\Controllers;

use App\Models\pt_region;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pt_regionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las regiones
        $regiones = pt_region::all();
        //respondemos las regiones
        return response()->json($regiones, 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $request->validate([
            'REG_NAME'=>'required'
        ]);
        //creamos la region
        $region = pt_region::create($request->all());
        //respondemos la region
        return response()->json($region, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //funcion que recupera las provincias para una region
    public function show($id)
    {
        //buscamos
        $region = pt_region::findOrFail($id);
        //recuperamos las provincias de la region
        $provincias = DB::table('pt_provincias')->where('pt_region_id', $id)->get();
        //respondemos
        return response()->json($provincias, 200);
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
        //buscamos
        $region = pt_region::findOrFail($id);
        //actualizamos
        $region->update($request->all());
        //respondemos
        return response()->json($region, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscamos
        $region = pt_region::findOrFail($id);
        //eliminamos
        $region->delete();
        //respondemos
        $json = "{'message':'Región eliminada'}"; 
        return response()->json($json, 200);
    }
}