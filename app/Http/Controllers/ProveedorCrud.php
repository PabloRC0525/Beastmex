<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ProveedorCrud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulProveedor= DB::table('proveedores')->get();
        return view('gestionproveedores', compact('consulProveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update( $request, string $id)
    {
        DB::table('proveedores')->where('id', $id)->update([
           "nombre"=> $request->input('txtNombre'),
            "correo"=> $request->input('txtCorreo'),
            "telefono"=> $request->input('txtTelefono'),
            "updated_at"=> Carbon::now(), 
        ]);
        

        return redirect('/gestion/proveedores')->with('confirmacion', 'proveedor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_proveedores')->where('id', $id)->delete();
        $mensajeConfirmacion = 'Recuerdo eliminado correctamente';

    return redirect('/gestion/proveedores')->with('confirmacion', $mensajeConfirmacion);
    }
}
