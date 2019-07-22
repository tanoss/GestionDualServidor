<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('entidadformadora','TrainingEntityController');
Route::get('business_project_plans/students','BusinessProjectPlansController@searchStudents');
Route::resource('periodoacademico','AcademicPeriodController');
Route::resource('role','RoleController');
Route::resource('estudiante','StudentController');
Route::resource('tutors','TutorsController');
Route::resource('genders','GendersController');
Route::resource('rotation_plans','RotationPlansController');
Route::resource('business_project_plans','BusinessProjectPlansController');
Route::resource('entidadformadora','TrainingEntityController');
Route::resource('plantrabajo','TrainingFrameworkPlansController');
Route::resource('objectives','ObjetivesController');
Route::resource('learningreports','LearningReportsController');
Route::resource('activitylearningreports','ActivityLearningReportsController');
