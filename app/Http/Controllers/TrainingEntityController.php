<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingEntity;

class TrainingEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrainingEntity::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $trainingEntity = new TrainingEntity;
        $trainingEntity->nombre = $request->nombre;
        $trainingEntity->naturaleza = $request->naturaleza;
        $trainingEntity->representanteLegal  = $request->representanteLegal;
        $trainingEntity->ruc = $request->ruc;
        $trainingEntity->actividadEconomica = $request->actividadEconomica;
        $trainingEntity->correo = $request->correo;
        $trainingEntity->direccion = $request->direccion;
        $trainingEntity->telefono = $request->telefono;
        $trainingEntity->save();
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TrainingEntity::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request,$id)
    {
        
        $trainingEntity =  TrainingEntity::findOrFail($id);
      
        $trainingEntity->update(["nombre"=>$request->nombre,
        "naturaleza" => $request->naturaleza,
        "representanteLegal"  => $request->representanteLegal,
        "ruc" => $request->ruc,
        "actividadEconomica" => $request->actividadEconomica,
        "correo" => $request->correo,
        "direccion" => $request->direccion,
        "telefono" => $request->telefono,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainingEntity =  TrainingEntity::findOrFail($id);
        $trainingEntity->delete();
    }
}
