<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessProjectPlan;

//use App\FrameworkPlanTraining;
use App\TrainingFrameworkPlan;
class BusinessProjectPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bbplan =  BusinessProjectPlan::with('TrainingFrameworkPlan')->get();
        return response()->json($bbplan);
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
        $dataBusinessProjectPlan = $dataBodyClient['business_project_plans'];
        $dataFrameworkTrainingPlan = $dataBodyClient['training_framework_plans'];
        $frameworkplantraining =  TrainingFrameworkPlan::findorfail($dataFrameworkTrainingPlan['id']);
        
        $frameworkplantraining-> BusinessProjectPlan()->create([
          
            'titulo'=>$dataBusinessProjectPlan['titulo'],
            'analisis'=>$dataBusinessProjectPlan['analisis'],
            'objetivo'=>$dataBusinessProjectPlan['objetivo'],
            'descripcion'=>$dataBusinessProjectPlan['descripcion'],
            'indicador'=>$dataBusinessProjectPlan['indicador'],
            'medicion'=>$dataBusinessProjectPlan['medicion'],
            'meta'=>$dataBusinessProjectPlan['meta'],
            'fuenteDatos'=>$dataBusinessProjectPlan['fuenteDatos'],
            'presupuesto'=>$dataBusinessProjectPlan['presupuesto'],
            'beneficiosEsperados'=>$dataBusinessProjectPlan['beneficiosEsperados'],
            'prioridad'=>$dataBusinessProjectPlan['prioridad'],

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
        // $response = BusinessProjectPlan::where('id',$id)->first();
        // return response()->json(['BusinessProjectPlan'=>$response],200);
        $response = BusinessProjectPlan::where('id',$id)->with('TrainingFrameworkPlan')->first();
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
        return BusinessProjectPlan::where('id', $id)->get();

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
        $dataBusinessProjectPlan = $dataBodyClient['business_project_plans'];
        $response = BusinessProjectPlan::findorfail($id);
        $response -> update([

            'titulo'=>$dataBusinessProjectPlan['titulo'],
            'analisis'=>$dataBusinessProjectPlan['analisis'],
            'objetivo'=>$dataBusinessProjectPlan['objetivo'],
            'descripcion'=>$dataBusinessProjectPlan['descripcion'],
            'indicador'=>$dataBusinessProjectPlan['indicador'],
            'medicion'=>$dataBusinessProjectPlan['medicion'],
            'meta'=>$dataBusinessProjectPlan['meta'],
            'fuenteDatos'=>$dataBusinessProjectPlan['fuenteDatos'],
            'presupuesto'=>$dataBusinessProjectPlan['presupuesto'],
            'beneficiosEsperados'=>$dataBusinessProjectPlan['beneficiosEsperados'],
            'prioridad'=>$dataBusinessProjectPlan['prioridad'],

      ]);
       //return $response;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $bpplan= BusinessProjectPlan::findOrFail($id);
        $bpplan->delete();
        return response()->json(true,201);
    }
}

