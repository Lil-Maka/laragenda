@extends('layouts.layout')
@section('body')
	@section('actual')
		Reunió
	@endsection
	@section('contingut')
		@foreach($reunions as $reunio)
			{{$reunio->entrada->descripcio}}
			{{$reunio->entrada->created_at}}
			{{$reunio->titol}}
			{{$reunio->lloc}}
			{{$reunio->durada}}
			{{$reunio->data_reunio}}
			<hr>
		@endforeach
	@endsection
@endsection