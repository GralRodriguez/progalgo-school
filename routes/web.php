<?php

use App\Http\Controllers\CicloEscolarController;
use App\Http\Controllers\EducationalStageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanEstudiosController;
use App\Http\Controllers\SchoolCycleController;
use App\Http\Controllers\SchoolDegreeController;
use App\Http\Controllers\SchoolPeriodController;
use App\Http\Controllers\SchoolStageController;
use App\Http\Controllers\SchoolTurnController;
use App\Http\Controllers\SystemProfileController;
use App\Http\Controllers\SystemUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "bienvenido a la aplicacion";
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index');
});

Route::get('cursos', function(){
    return "Bienvenido a la página de cursos";
});

Route::get('cursos/create', function(){
    return "En esta página podras crear un curso";
});

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    if(is_null($categoria)){
        return "Bienvenido al curso " . $curso;
    }else{
        return "Bienvenido al curso " . $curso .  " de la categoria: " . $categoria;
    }
    
});


Route::controller(EducationalStageController::class)->group(function(){
    Route::get('educational_stage', 'index');
});

Route::controller(SchoolCycleController::class)->group(function(){
    Route::get('school_cycle', 'index');
    Route::get('school_cycle/create', 'create');
    Route::get('school_cycle/{cycle}', 'show');
});

Route::controller(SchoolDegreeController::class)->group(function(){
    Route::get('school_degree', 'index');
    Route::get('school_degree/create', 'create');
    Route::get('school_degree/{degree}', 'show');
});

Route::controller(SchoolPeriodController::class)->group(function(){
    Route::get('school_period', 'index');
    Route::get('school_period/create', 'create');
    Route::get('school_period/{period}', 'show');
});

Route::controller(SchoolStageController::class)->group(function(){
    Route::get('school_stage', 'index');
    Route::get('school_stage/create', 'create');
    Route::get('school_stage/{stage}', 'show');
});


Route::controller(SchoolTurnController::class)->group(function(){
    Route::get('school_turn', 'index');
    Route::get('shool_turn/create', 'create');
    Route::get('school_turn/{turn}', 'show');
});

Route::controller(UserController::class)->group(function(){
    Route::get('user', 'index');
    Route::get('user/create', 'create');
    Route::get('user/{user}', 'show');
});

Route::controller(UserTypeController::class)->group(function(){
    Route::get('user_type', 'index');
    Route::get('user_type/create', 'create');
    Route::get('user_type/{utype}', 'show');
});

Route::controller(SystemProfileController::class)->group(function(){
    Route::get('system_profile', 'index');
    Route::get('system_profile/create', 'create');
    Route::get('system_profile/{profile}', 'show');
});

Route::controller(SystemUserController::class)->group(function(){
    Route::get('system_user', 'index');
    Route::get('system_user/create', 'create');
    Route::get('system_user/{user}', 'show');
});