<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RotationPlan;

use App\TrainingFrameworkPlan;
class RotationPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rplan =  RotationPlan::with('TrainingFrameworkPlan')->get();
        return response()->json($rplan);

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
        $dataRotationPlan = $dataBodyClient['rotation_plans'];
        $dataFrameworkPlanTraining = $dataBodyClient['training_framework_plans'];
        $frameworkplantraining =  TrainingFrameworkPlan::findorfail($dataFrameworkPlanTraining['id']);
        $frameworkplantraining->RotationPlan()->create([
           // 'idPlanMarcoFormacion'=>$dataRotationPlan['idPlanMarcoFormacion'],
            'conocimientosTeoricos'=>$dataRotationPlan['conocimientosTeoricos'],
            'conocimientosProcedimentales'=>$dataRotationPlan['conocimientosProcedimentales'],
            'conocimientosActitudinales'=>$dataRotationPlan['conocimientosActitudinales'],
            'prioridad'=>$dataRotationPlan['prioridad']

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
        //return RotationPlan::where('id',$id)->get();
        $response = RotationPlan::where('id',$id)->with('TrainingFrameworkPlan')->first();
        return response()->json([$response],200);
        //return response()->json(['BusinessProjectPlan'=>$response],200);
        // with('TrainingFrameworkPlan')->get()
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Solicitamos al modelo el plan de rotacion con el id solicitado por GET.
        return RotationPlan::where('id', $id)->get();
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
        $dataRotationPlan = $dataBodyClient['rotation_plans'];
        $response = RotationPlan::findorfail($id);
        $response -> update([
            'conocimientosTeoricos'=>$dataRotationPlan['conocimientosTeoricos'],
            'conocimientosProcedimentales'=>$dataRotationPlan['conocimientosProcedimentales'],
            'conocimientosActitudinales'=>$dataRotationPlan['conocimientosActitudinales'],
            'prioridad'=>$dataRotationPlan['prioridad']
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
        $rotationPlan = RotationPlan::findOrFail($id);
         $rotationPlan->delete();
    }
}
