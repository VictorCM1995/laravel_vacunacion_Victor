<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacuna;
use Carbon\Carbon;

class VacunaController extends Controller
{

	public function inicio()
	{
		return redirect()->action([VacunaController::class,'index']);
	}

	public function index() {
		$vacunas = Vacuna::all();
		return view("vacunas.index", compact("vacunas"));
	}

    public function show($id) {
		$vacuna = Vacuna::find($id);
		return view('vacunas.show', ["vacuna" => $vacuna]);
	}

	public function crear($nombre){
		$vacuna = new Vacuna();
		$vacuna->nombre = $nombre;
		$vacuna->save();
	}

	public function devolver(){

	}
}