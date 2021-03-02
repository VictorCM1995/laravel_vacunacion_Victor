<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\PacienteController;

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

Route::get('/', [VacunaController::class,'inicio'])->name("home");
Route::get('vacunas', [VacunaController::class,'index'])->name("vacunas.index");
Route::get('vacunas/{vacuna}', [VacunaController::class,'show'])->name("vacunas.show");
Route::get('pacientes/{paciente}/vacunar', [PacienteController::class,'vacunar']);

Route::post('api/vacunas/crear', [VacunaController::class,'crear']);
Route::get('api/vacunas/{idPaciente}',[VacunaController::class,"devolver"]);

Route::get('pacientes/buscador',[PacienteController::class,"buscar"]);