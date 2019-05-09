@extends('layouts.layout')
@section('body')
<div class="container" style="margin-top:5%; margin-bottom: 5%; font-size: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: beige">Benvingut al teu aplicatiu preferit, l'AGENDA</div>

                <div class="card-body" style="background-color: AntiqueWhite;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Estàs connectat com a usuari <strong>{{Auth::user()->name}}</strong>
                </div>
                <div class="card-body" style="background-color: AntiqueWhite;">
                    El teu tipus de perfil actualment és <strong>{{Auth::user()->perfil->tipus}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
