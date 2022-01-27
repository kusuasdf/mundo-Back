<?php

namespace App\Http\Controllers;

use App\Models\ciudad;

use Illuminate\Http\Request;

class ciudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las ciudades
        $ciudades = ciudad::all();
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
            'provincia_id'=>'required'
        ]);
        //creamos la ciudad
        $ciudad = ciudad::create($request->all());
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
        $ciudad = ciudad::findOrFail($id);
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
        $ciudad = ciudad::findOrFail($id);
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
        $ciudad = ciudad::findOrFail($id);
        //eliminamos
        $ciudad->delete();
        //respondemos
        $json = "{'message':'Ciudad eliminada'}"; 
        return response()->json($json, 200);
    }
}
