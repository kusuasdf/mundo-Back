<?php

namespace App\Http\Controllers;

use App\Models\pt_ciudad;

use Illuminate\Http\Request;

class pt_ciudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las ciudades
        $ciudades = pt_ciudad::all();
        //respondemos las ciudades
        return response()->json($ciudades, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos
        $request->validate([
            'CIU_NAME'=>'required',
            'pt_provincia_id'=>'required'
        ]);
        //creamos la ciudad
        $ciudad = pt_ciudad::create($request->all());
        //respondemos la ciudad
        return response()->json($ciudad, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscamos
        $ciudad = pt_ciudad::findOrFail($id);
        //respondemos
        return response()->json($ciudad, 200);
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
        $ciudad = pt_ciudad::findOrFail($id);
        //actuitalizamos
        $ciudad->update($request->all());
        //respondemos
        return response()->json($ciudad, 200);
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
        $ciudad = pt_ciudad::findOrFail($id);
        //eliminamos
        $ciudad->delete();
        //respondemos
        $json = "{'message':'Ciudad eliminada'}"; 
        return response()->json($json, 200);
    }
}
