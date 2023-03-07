<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function pr1(){
        return view('program1');
    }
    public function pr2(){
        return view('program2');
    }
}
