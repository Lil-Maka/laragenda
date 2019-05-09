@extends('layouts.layout')
@section('body')
 <div class="all" style="margin-top:5%; margin-bottom: 5%;">
	<h1>Crea trucada</h1>
	<form method="POST" action="{{route('creacio')}}">
	  <div class="row justify-content-center" style="margin-top:2%; font-size: 20px;">
		<div class="cont col-md-8">
			<div class="row">
				<label for="descripcio" class="form-label col-md-3">Descripció</label>
				<textarea id="descripcio" name="descripcio" class="form-control col-md-6" rows="3" style="resize:none;"></textarea>
			</div>
		</div>
	 	@csrf
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="numero" class="form-label col-md-3">Número de telèfon</label>
				<input id="numero" name="numero" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="tipus" class="form-label col-md-3">Tipus de trucada (entrada o sortida)</label>
				<input id="tipus" name="tipus" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="dispositiu" class="form-label col-md-3">Dispositiu (mòbil o fixe)</label>
				<input id="dispositiu" name="dispositiu" class="form-control col-md-6">
			</div>
		</div>
		<div class="cont col-md-8" style="margin-top:1%;">
			<div class="row">
				<label for="lloc_trucada" class="form-label col-md-3">Lloc de la trucada (internacional o nacional)</label>
				<input id="lloc_trucada" name="lloc_trucada" class="form-control col-md-6">
			</div>
				<input type="submit">
		</div>
     </div>
	</form>
 </div>
@endsection