@extends('layouts.layout')
@section('body')
 <div class="all" style="margin-top:5%; margin-bottom: 5%;">
	<h1>Crea reunió</h1>
	<form method="POST" action="{{route('creacio_reunio')}}">
	@csrf
	 <div class="row justify-content-center" style="margin-top:2%; font-size: 20px;">
		<div class="cont col-md-8">
			<div class="row">
				<label for="descripcio" class="form-label col-md-3">Descripció</label>
				<textarea id="descripcio" name="descripcio" class="form-control col-md-6" rows="3" style="resize:none;"></textarea>
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="titol" class="form-label col-md-3">Titol de la reunió</label>
				<input id="titol" name="titol" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="lloc" class="form-label col-md-3">Lloc de la reunió</label>
				<input id="lloc" name="lloc" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="durada" class="form-label col-md-3">Durada de la reunió</label>
				<input id="durada" name="durada" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="data_reunio" class="form-label col-md-3">Data de la reunió</label>
				<input id="data_reunio" name="data_reunio" class="form-control col-md-6">
			</div>
			<input type="submit">
		</div>
	 </div>
	</form>
 </div>
@endsection