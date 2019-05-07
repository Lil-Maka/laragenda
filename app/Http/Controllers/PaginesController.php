<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginesController extends Controller
{
    public function entrades(){
    	return view('totes');
    }
    public function trucades(){
    	return view('trucades');
    }
    public function missatges(){
    	return view('missatges');
    }
    public function reunions(){
    	return view('reunio');
    }
    public function login(){
    	return view('login');
    }
    public function registre(){
    	return view('registre');
    }
}
