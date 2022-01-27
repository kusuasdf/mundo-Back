<?php

namespace App\Http\Controllers;

use App\Models\calle;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class calleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las calles
        $calles = calle::select('id','CAL_NAME','ciudad_id')->with([
            'ciudad:id,CIU_NAME,provincia_id',
            'ciudad.provincia:id,PROV_NAME,region_id',
            'ciudad.provincia.region:id,REG_NAME'
        ])->get();
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
            'ciudad_id'=>'required'
        ]);
        //creamos la calle
        $calle = calle::create($request->all());
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
        $calle = calle::findOrFail($id);
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
        $calle = calle::findOrFail($id);
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
        $calle = calle::findOrFail($id);
        //eliminamos
        $calle->delete();
        //respondemos
        $json = "{'message':'calle eliminada'}"; 
        return response()->json($json, 200);
    }
}
