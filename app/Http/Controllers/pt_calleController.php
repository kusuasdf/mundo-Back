<?php

namespace App\Http\Controllers;

use App\Models\pt_calle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pt_calleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las calles
        $calles = pt_calle::all();
        //agregamos a que ciudad pertenece
        foreach ($calles as $calle) {
            $calle->ciudad = DB::table('pt_ciudads')->where('id', $calle->pt_ciudad_id)->first();
        }
        //agregamos a que provincia pertenece
        foreach ($calles as $calle) {
            $calle->provincia = DB::table('pt_provincias')->where('id', $calle->ciudad->pt_provincia_id)->first();
        }
        //agregamos a que region pertenece
        foreach ($calles as $calle) {
            $calle->region = DB::table('pt_regions')->where('id', $calle->provincia->pt_region_id)->first();
        }
        //respondemos las calles
        return response()->json($calles, 200);
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
            'CAL_NAME'=>'required',
            'pt_ciudad_id'=>'required'
        ]);
        //creamos la calle
        $calle = pt_calle::create($request->all());
        //respondemos la calle
        return response()->json($calle, 200);
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
        $calle = pt_calle::findOrFail($id);
        //respondemos
        return response()->json($calle, 200);
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
        $calle = pt_calle::findOrFail($id);
        //actualizamos
        $calle->update($request->all());
        //respondemos
        return response()->json($calle, 200);
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
        $calle = pt_calle::findOrFail($id);
        //eliminamos
        $calle->delete();
        //respondemos
        $json = "{'message':'calle eliminada'}"; 
        return response()->json($json, 200);
    }
}
