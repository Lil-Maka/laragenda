@extends('layouts.layout')
@section('body')
	@section('actual')
		Entrades
	@endsection
	@section('contingut')
		@foreach($entrades as $entrada)
			{{$entrada->descripcio}}
			{{$entrada->created_at}}
			@if($entrada->reunios != "[]")
				{{$entrada->reunios}}
			@endif
			@if($entrada->trucadas != "[]")
				{{$entrada->trucadas}}
			@endif
			{{--{{$entrada->numero}}
			{{$entrada->trucadas->tipus}}
			{{$entrada->trucadas->dispositiu}}
			{{$entrada->trucadas->lloc_trucada}}--}}
			@if($entrada->missatges != "[]")
				{{$entrada->missatges}}
			@endif
			<hr>
		@endforeach
	@endsection
@endsection