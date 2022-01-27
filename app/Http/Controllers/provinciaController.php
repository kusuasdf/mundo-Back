<?php

namespace App\Http\Controllers;

use App\Models\provincia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class provinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recuperamos todas las provincias
        $provincias = provincia::all();
        //respondemos las provincias
        return response()->json($provincias, 200);
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
            'PROV_NAME'=>'required',
            'region_id'=>'required'
        ]);
        //creamos la provincia
        $provincia = provincia::create($request->all());
        //respondemos la provincia
        return response()->json($provincia, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //funcion que recupera las ciudades para una provincia
    public function show($id)
    {
        //Buscamos para validar que la provincia existe
        $provincia = provincia::findOrFail($id);
        //recuperamos las ciudades de la provincia
        $ciudades = DB::table('ciudads')->where('provincia_id', $id)->get();
        //respondemos
        return response()->json($ciudades, 200);
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
        $provincia = provincia::findOrFail($id);
        //actualizamos
        $provincia->update($request->all());
        //respondemos
        return response()->json($provincia, 200);
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
        $provincia = provincia::findOrFail($id);
        //eliminamos
        $provincia->delete();
        //respondemos
        $json = "{'message':'Provincia eliminada'}"; 
        return response()->json($json, 200);
    }
    
}
