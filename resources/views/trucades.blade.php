@extends('layouts.layout')
@section('body')
	@section('actual')
		Trucades
	@endsection
	@section('contingut')
		@foreach($trucades as $trucada)
			{{$trucada->entrada->descripcio}}
			{{$trucada->entrada->created_at}}
			{{$trucada->numero}}
			{{$trucada->tipus}}
			{{$trucada->dispositiu}}
			{{$trucada->lloc_trucada}}
			<hr>
		@endforeach
	@endsection
@endsection