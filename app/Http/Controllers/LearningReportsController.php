<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingFrameworkPlan;
use App\LearningReport;
class LearningReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lreports =  LearningReport::with('TrainingFrameworkPlan')->get();
        return response()->json($lreports);
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
        $dataLearninReports = $dataBodyClient['learning_reports'];
        $dataFrameworkTrainingPlan = $dataBodyClient['training_framework_plans'];
        $frameworkplantraining =  TrainingFrameworkPlan::findorfail($dataFrameworkTrainingPlan['id']);
        
        

        $frameworkplantraining-> LearningReport()->create([
          
            'semana'=>$dataLearninReports['semana'],
            'calificacion'=>$dataLearninReports['calificacion'],
            'fechaEntrega'=>$dataLearninReports['fechaEntrega'],
            'reflexion'=>$dataLearninReports['reflexion'],
            'observaciones'=>$dataLearninReports['observaciones'],
            'prioridad'=>$dataLearninReports['prioridad'],
            

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
        //
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
        $dataLearninReports = $dataBodyClient['learning_reports'];
        $response = LearningReport::findorfail($id);
        $response -> update([

            'semana'=>$dataLearninReports['semana'],
            'calificacion'=>$dataLearninReports['calificacion'],
            'fechaEntrega'=>$dataLearninReports['fechaEntrega'],
            'reflexion'=>$dataLearninReports['reflexion'],
            'observaciones'=>$dataLearninReports['observaciones'],
            'prioridad'=>$dataLearninReports['prioridad'],

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
        $lreports= LearningReport::findOrFail($id);
        $lreports->delete();
        return response()->json(true,201);
    }
}
