@extends('layouts.master')

@section('titulo')
	Vacunas
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		@foreach( $vacunas as $vacuna )
		<div class="col-xs-12 col-sm-6 col-md-4 vacunas">
			<a class="btn btn-outline-primary" href="{{ route('vacunas.show' , $vacuna) }}">
				<h4 style="min-height:45px;margin:5px 0 10px 0">
					{{$vacuna->nombre}}
				</h4>
				<p>Posibles grupos de vacunacion</p>
				
				<ul>
					<li></li>
				</ul>
				
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection