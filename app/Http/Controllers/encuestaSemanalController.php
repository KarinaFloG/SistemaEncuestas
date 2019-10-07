<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestaSemanalController extends Controller
{
    public function showform(){
    	return view('encuestaSemanal');
    }
}
