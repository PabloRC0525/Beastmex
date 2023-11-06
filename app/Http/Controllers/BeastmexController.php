<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GusuarioRequest;


use App\Http\Requests\ValidadorResgistroC; 

use RealRashid\SweetAlert\Facades\Alert;



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
    public function metodoCgestion(){
        return view('Cgestion');
    }

    public function metodoVconsulta(){
        return view('Vconsulta');
    }

    public function metodoGusuario(){
        return view('Gusuarios');
    }
    public function metodoVgerencia(){
        return view('Vgerencia');
    }
    public function metodoGanancias(){
        return view('Ganancias');
    }

    public function guardarusuario(GusuarioRequest $req)
    {
        $validator = Validator::make($req->all(), $req->rules());

        if ($validator->fails()) {
            return redirect("/Gusuarios")->withErrors($validator)->withInput();
        }

        $usu = $req->input('nombre');

        return redirect("/Gusuarios")->with("confirmacion", "¡El usuario $usu se ha registrado correctamente!");
    }


  
    public function metodoPventas(){
        return view('ProcesoVentas');
    }
  
    public function metodoGraficas(){
        return view('Graficas');
    }
  
    public function metodoAgregarP(ValidadorResgistroC $req){


        // Guarda el mensaje en una variable de sesión
        session()->flash('confirmacion', 'Todo correcto: Producto ' . $req->input('txtNombre') . ' Agregado');

        // Muestra el mensaje usando SweetAlert
        Alert::success('Confirmación', session('confirmacion'));

        // Redirige a la página de registro
        return redirect('/Cgestion');
    }
        
}


