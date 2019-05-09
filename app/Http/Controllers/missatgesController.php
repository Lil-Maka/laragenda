<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Missatge;
use App\Entrada;
use Auth;
class missatgesController extends Controller
{
    public function showform(){
        if(Auth::user()->perfil->tipus == 'gestor')
        {
    	   return view('create.missatge');
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
    	Missatge::create([
    		'titol' => request('titol'),
    		'prioritat' => request('prioritat'),
    		'entrada_id' => $id
    	]);
    	return redirect('missatges');
    }
}
