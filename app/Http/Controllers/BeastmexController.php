<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeastmexController extends Controller
{
    public function metodoInicio(){

        return view('principal');
    }
    
    public function metodoLogin(){
        return view('login');
    }
    public function metodoAconsultas(){

        return view('A_consultaP');
    }
    public function metodoAlmacen(){
        return view('almacen');
    }
    public function metodoEditar(){
        return view('editar');
    }
}
