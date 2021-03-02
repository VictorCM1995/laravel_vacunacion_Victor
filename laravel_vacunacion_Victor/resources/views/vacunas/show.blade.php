@extends('layouts.master')

@section('titulo')
	Vacunas
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-9">
			{{ $vacuna->nombre }}
			<h1>Pacientes NO VACUNADOS:</h1>
			
			<h1>Pacientes vacunados:
			<div class="row col-8">
				<div class="col">
					<a href="{{ route('home') }}" class="btn btn-warning">Vacunar</a>
				</div>
				<div class="col">
					<a href="{{ route('home') }}" class="btn btn-outline-success">Volver al listado</a>
				</div>
			</div>
		</div>
	</div>	
</div>
@endsection