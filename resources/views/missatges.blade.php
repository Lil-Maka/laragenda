@extends('layouts.layout')
@section('body')
	@section('actual')
		Missatges
	@endsection
	@section('contingut')
		@foreach($missatges as $missatge)
		<div class="col-md-12">
		  <div class="row">
		   	<div class="col-md-5 text-left" style="margin-left:3%;">
				<strong>Titol: </strong>{{$missatge->titol}}
		   	</div>
		   	<div class="col-md-6 text-right" style="margin-left: 2%;">
				{{$missatge->entrada->created_at}}
		   	</div>
		  </div>
		  <div class="row">
			<i class="material-icons">message</i>
			<div class="col-md-7">
				<strong>Descripció: </strong>{{$missatge->entrada->descripcio}}
			</div>
			<div class="col-md-4 text-right" style="position: absolute; bottom: 0; right: 0; margin-right: 3%;">
				{{$missatge->prioritat}}
			</div>
		  </div>
		</div>
			<hr>
		@endforeach
	@endsection
@endsection