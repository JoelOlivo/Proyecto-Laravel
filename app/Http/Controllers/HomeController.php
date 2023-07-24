<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function home(){
        return "Hola Mundo";
    }
    
    public function parametro($nombre){
        return $nombre;
    }
}
