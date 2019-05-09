@extends('layouts.layout')
@section('body')
	@section('actual')
		Entrades
	@endsection
	@section('contingut')
	@if(Auth::user()->perfil->tipus == 'gestor')
	 <div class="col-md-12" style="margin-bottom: 5%; margin-top: 2%;">
	  <div class="row">
	   <div class="col-md-4">
		<i class="material-icons">
		 <a href="{{route('creacio')}}" style="font-size: 50px; color:black;">phone</a>
		</i>
	   </div>
	   <div class="col-md-4">
		<i class="material-icons">
		 <a href="{{route('creacio_msg')}}" style="font-size: 50px; color:black;">message</a>
		</i>
	   </div>
	   <div class="col-md-4">
		<i class="material-icons" style="font-size: 50px; color:black;">
		 <a href="{{route('creacio_reunio')}}" style="font-size: 50px; color:black;">place</a>
		</i>
	   </div>
	  </div>
	 </div>
	@endif
		@foreach($entrades as $entrada)
				{{-- {{$entrada->descripcio}}
			{{$entrada->created_at}} --}}
			@if($entrada->reunios != "[]")
				@foreach($entrada->reunios as $reunio)
				  <div class="col-md-12">
				   <div class="row">
				   	<div class="col-md-12 text-left" style="margin-left:3%;">
						{{$entrada->created_at}}
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
						<strong>Descripció:</strong> {{$entrada->descripcio}}
					 </div>
					 <div class="col-md-5 text-right" style="position: absolute; bottom: 0; right: 0; margin-right: 3%;">
						Data: {{$reunio->data_reunio}}
					 </div>
				   </div>
				  </div>
				@endforeach
			@endif
			@if($entrada->trucadas != "[]")
				@foreach($entrada->trucadas as $trucada)
				 <div class="col-md-12">
				   <div class="row">
				   	<div class="col-md-12 text-left" style="margin-left:3%;">
						{{$entrada->created_at}}
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
						<strong>Descripció:</strong> {{$entrada->descripcio}}
					 </div>
					 {{-- <div class="col-md-4 text-right" style="position: absolute; bottom: 0; right: 0;margin-left:3%;"> --}}
					 <div class="col-md-4 text-right" style="margin-left:3%;">
						{{$trucada->dispositiu}}
					 </div>
				   </div>
				@endforeach
			@endif
			{{--{{$entrada->numero}}
			{{$entrada->trucadas->tipus}}
			{{$entrada->trucadas->dispositiu}}
			{{$entrada->trucadas->lloc_trucada}}--}}
			@if($entrada->missatges != "[]")
				@foreach($entrada->missatges as $missatge)
				 <div class="col-md-12">
				  <div class="row">
				   	<div class="col-md-5 text-left" style="margin-left:3%;">
						<strong>Titol: </strong>{{$missatge->titol}}
				   	</div>
				   	<div class="col-md-6 text-right" style="margin-left: 2%;">
				   		{{$entrada->created_at}}
				   	</div>
				  </div>
				  <div class="row">
					<i class="material-icons">message</i>
					<div class="col-md-7">
						<strong>Descripció: </strong>{{$entrada->descripcio}}
					</div>
					<div class="col-md-4 text-right" style="position: absolute; bottom: 0; right: 0; margin-right: 3%;">
						{{$missatge->prioritat}}
					</div>
				  </div>
				 </div>
				@endforeach
			@endif
			<hr>
		@endforeach
	@endsection
@endsection