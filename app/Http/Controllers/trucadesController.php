<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trucada;
use App\Entrada;
use Auth;
class trucadesController extends Controller
{
    public function showform(){
    	if(Auth::user()->perfil->tipus == 'gestor')
    	{
    		return view('create.trucada');
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
    	Trucada::create([
    		'numero' => request('numero'),
    		'tipus' => request('tipus'),
    		'dispositiu' => request('dispositiu'),
    		'lloc_trucada' => request('lloc_trucada'),
    		'entrada_id' => $id
    	]);
    	return redirect('trucades');
    }
}
