<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestaSemestralController extends Controller
{
    public function showform(){
    	return view('encuestaSemestral');
    }
}
