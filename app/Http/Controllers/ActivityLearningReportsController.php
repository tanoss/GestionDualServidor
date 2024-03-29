<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityLearningReport;
use App\LearningReport;

class ActivityLearningReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alreports =  ActivityLearningReport::with('LearningReport')->get();
        return response()->json($alreports);
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
        $dataActivityLearingReports = $dataBodyClient['Activity_learning_reports'];
        $dataLearingReports = $dataBodyClient['learning_reports'];
        $learningreport =  LearningReport::findorfail($dataLearingReports['id']);

        $learningreport-> ActivityLearningReport()->create([
          
            'descripcion'=>$dataActivityLearingReports['descripcion'],
            'tipo'=>$dataActivityLearingReports['tipo'],
            'fecha'=>$dataActivityLearingReports['fecha'],
            'horaIngreso'=>$dataActivityLearingReports['horaIngreso'],
            'horaSalida'=>$dataActivityLearingReports['horaSalida'],
            'horaAlmuerzo'=>$dataActivityLearingReports['horaAlmuerzo'],
            'horasTotales'=>$dataActivityLearingReports['horasTotales'],
            'prioridad'=>$dataActivityLearingReports['prioridad'],
            
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
        $response = ActivityLearningReport::where('id',$id)->with('LearningReport')->first();
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
        $dataActivityLearingReports = $dataBodyClient['Activity_learning_reports'];
        $response = ActivityLearningReport::findorfail($id);
        $response -> update([
            'descripcion'=>$dataActivityLearingReports['descripcion'],
            'tipo'=>$dataActivityLearingReports['tipo'],
            'fecha'=>$dataActivityLearingReports['fecha'],
            'horaIngreso'=>$dataActivityLearingReports['horaIngreso'],
            'horaSalida'=>$dataActivityLearingReports['horaSalida'],
            'horaAlmuerzo'=>$dataActivityLearingReports['horaAlmuerzo'],
            'horasTotales'=>$dataActivityLearingReports['horasTotales'],
            'prioridad'=>$dataActivityLearingReports['prioridad'],
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
        $alreports= ActivityLearningReport::findOrFail($id);
        $alreports->delete();
        return response()->json(true,201);
    }
}
