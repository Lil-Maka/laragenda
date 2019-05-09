@extends('layouts.layout')
@section('body')
	@section('actual')
		Trucades
	@endsection
	@section('contingut')
		@foreach($trucades as $trucada)
		<div class="col-md-12">
		   <div class="row">
		   	<div class="col-md-12 text-left" style="margin-left:3%;">
				{{$trucada->entrada->created_at}}
		   	</div>
		   </div>
		   <div class="row">
			<i class="material-icons">phone</i>
			  <div class="col-md-4">
				<strong>Número: </strong>{{$trucada->numero}}
			  </div>
			  <div class="col-md-3">
				{{$trucada->lloc_trucada}}
			  </div>
			  <div class="col-md-4 text-right">
				{{$trucada->tipus}}
			  </div>
		   </div>
		   <div class="row" style="margin-left:1%;">
		   	 <div class="col-md-7">
				<strong>Descripció:</strong> {{$trucada->entrada->descripcio}}
			 </div>
			 {{-- <div class="col-md-4 text-right" style="position: absolute; bottom: 0; right: 0;margin-left:3%;"> --}}
			 <div class="col-md-4 text-right" style="margin-left:3%;">
				{{$trucada->dispositiu}}
			 </div>
		</div>
			<hr>
		@endforeach
	@endsection
@endsection