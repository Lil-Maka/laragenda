@extends('layouts.layout')
@section('body')
	@section('actual')
		Reunió
	@endsection
	@section('contingut')
		@foreach($reunions as $reunio)
			<div class="col-md-12">
			   <div class="row">
			   	<div class="col-md-12 text-left" style="margin-left:3%;">
					{{$reunio->entrada->created_at}}
			   	</div>
			   </div>
			   <div class="row">
				<i class="material-icons">place</i>
				  <div class="col-md-4">
					<strong>Titol: </strong>{{$reunio->titol}}
				  </div>
				  <div class="col-md-3">
					{{$reunio->lloc}}
				  </div>
				  <div class="col-md-4 text-right">
					Durada: {{$reunio->durada}}
				  </div>
			   </div>
			   <div class="row" style="margin-left:1%;">
			   	 <div class="col-md-7">
					<strong>Descripció:</strong> {{$reunio->entrada->descripcio}}
				 </div>
				 <div class="col-md-5 text-right" style="position: absolute; bottom: 0; right: 0; margin-right: 3%;">
					Data: {{$reunio->data_reunio}}
				 </div>
			   </div>
			</div>
			<hr>
		@endforeach
	@endsection
@endsection