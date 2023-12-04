<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GusuarioRequest;
use App\Models\Producto;
use DB;
use Carbon\Carbon;

class ControllerAdmin extends Controller
{



    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Usuarios=DB::table('tb_usuarios_registrados')->get();
        return view('Gusuarios',compact('Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $Usuarios = DB::table('tb_usuarios_registrados')->get();
    return view('Gusuarios', compact('Usuarios'));
    }
        
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tb_usuarios_registrados')->insert([
            "Nombre"=> $request->input('txtnombre'),
            "AP"=> $request->input('txtAP'),
            "AM"=> $request->input('txtAM'),
            "correo"=> $request->input('txtcorreo'),
            "puesto"=> $request->input('txtpuesto'),
            "contraseña"=> $request->input('txtcontraseña'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);

        $usu = $request->input('txtnombre');
        return redirect('/Gusuarios/create')->with('confirmacion', "Usuario $usu se registro correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


  


}
