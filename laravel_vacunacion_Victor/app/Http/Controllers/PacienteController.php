<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Carbon\Carbon;

class PacienteController extends Controller
{
    function vacunar($id){
    	$paciente->update("vacunado")->set(true)->where("id","=","$id");
    }

    function buscar($nombre){
    	$pacientes = Paciente::class->where("nombre","LIKE","%$nombre%");
    	return $pacientes;
    }
}
