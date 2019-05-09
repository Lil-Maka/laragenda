@extends('layouts.layout')
@section('body')
	@section('actual')
		Missatges
	@endsection
	@section('contingut')
		@foreach($missatges as $missatge)
			{{$missatge->entrada->descripcio}}
			{{$missatge->entrada->created_at}}
			{{$missatge->titol}}
			{{$missatge->prioritat}}
			<hr>
		@endforeach
	@endsection
@endsection