<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reunio;
use App\Entrada;
use Auth;
class reunionsController extends Controller
{
    public function showform(){
    	if(Auth::user()->perfil->tipus == 'gestor')
    	{
    		return view('create.reunio');
    	}
		return redirect('home');
    }
    public function create(){
    	$entrada = Entrada::create([
    		'descripcio' => request('descripcio'),
    		'rep_id' => 2,
    		'envia_id' => Auth::user()->id
    	]);
    	$id = $entrada->id;
    	Reunio::create([
    		'titol' => request('titol'),
    		'lloc' => request('lloc'),
    		'durada' => request('durada'),
    		'data_reunio' => request('data_reunio'),
    		'entrada_id' => $id
    	]);
    	return redirect('reunions');
    }
}
