<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use App\Trucada;
use App\Missatge;
use App\Reunio;
class PaginesController extends Controller
{
    public function entrades(){
        $entrades = Entrada::all();
    	return view('totes', compact('entrades'));
    }
    public function trucades(){
        $trucades = Trucada::all();
    	return view('trucades', compact('trucades'));
    }
    public function missatges(){
        $missatges = Missatge::all();
    	return view('missatges', compact('missatges'));
    }
    public function reunions(){
        $reunions = Reunio::all();
    	return view('reunio', compact('reunions'));
    }
    public function login(){
    	return view('login');
    }
    public function registre(){
    	return view('registre');
    }
}
