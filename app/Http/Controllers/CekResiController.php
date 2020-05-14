<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekResiController extends Controller
{
    public function index(){
        return view('cekresi');
    }
}
