<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objective;
use App\TrainingFrameworkPlan;
class ObjetivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objective = Objective::with('TrainingFrameworkPlan')->get(); 
        return response()->json( $objective);

        
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
        $dataBodyClient = $request->json()->all();
        $objective = $dataBodyClient['objectives'];
        $dataFrameworkTrainingPlan = $dataBodyClient['training_framework_plans'];
        $frameworkplantraining =  TrainingFrameworkPlan::findorfail($dataFrameworkTrainingPlan['id']);
        
        $frameworkplantraining-> Objective()->create([
          
            'descripcion'=>$objective['descripcion'],
            'nivelLogroEsperado'=>$objective['nivelLogroEsperado'],
            'nivelLogroAlcanzado'=>$objective['nivelLogroAlcanzado'],
            'tareas'=>$objective['tareas'],
            'puestoAprendizaje'=>$objective['puestoAprendizaje'],
            'semanasTrabajo'=>$objective['semanasTrabajo'],
            'semana'=>$objective['semana'],
            'responsable'=>$objective['responsable'],
            'prioridad'=>$objective['prioridad'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Objective::where('id',$id)->with('TrainingFrameworkPlan')->first();
        return response()->json([$response],200);
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
    public function update(Request $request, $id)
    {
        $dataBodyClient = $request->json()->all();
        $objective = $dataBodyClient['objectives'];
        $response = Objective::findorfail($id);
        $response -> update([
            'descripcion'=>$objective['descripcion'],
            'nivelLogroEsperado'=>$objective['nivelLogroEsperado'],
            'nivelLogroAlcanzado'=>$objective['nivelLogroAlcanzado'],
            'tareas'=>$objective['tareas'],
            'puestoAprendizaje'=>$objective['puestoAprendizaje'],
            'semanasTrabajo'=>$objective['semanasTrabajo'],
            'semana'=>$objective['semana'],
            'responsable'=>$objective['responsable'],
            'prioridad'=>$objective['prioridad'],
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
        $objective= Objective::findOrFail($id);
        $objective->delete();
        return response()->json(true,201);
    }
}
