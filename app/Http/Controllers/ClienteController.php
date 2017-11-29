<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use App\Encargado;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::paginate(10);
        return view('clientes.index', compact('clientes'))
        ->with("clientes", $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new cliente();
        $cliente->numeroId = $request->numeroId;
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->finca = $request->finca;
        $cliente->ubicacion = $request->ubicacion;
        $cliente->e_mail = $request->e_mail;
        $cliente->idEncargado = $request->idEncargado;
        $cliente->nombreEncargado = $request->nombreEncargado;
        $cliente->telefonoEncargado = $request->telefonoEncargado;

        $cliente->save();

        return redirect()->route('clientes.index',$cliente)->with('info', 'El Nuevo Cliente Fue Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        //
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
        $cliente->numeroId = $request->numeroId;
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->finca = $request->finca;
        $cliente->ubicacion = $request->ubicacion;
        $cliente->e_mail = $request->e_mail;
        $cliente->idEncargado = $request->idEncargado;
        $cliente->nombreEncargado = $request->nombreEncargado;
        $cliente->telefonoEncargado = $return->telefonoEncargado;

        $cliente->save();

        return redirect()->route('clientes.show')->with('info', 'El Nuevo Cliente Fue Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('clientes.index')->with('info', 'El cliente fue eliminado exitosamente');
    }

    public function buscar_clientes($dato="")
    {

        $clientes= User::Busqueda($dato)->paginate(10);
        return view('clientes.index')
        ->with("usuarios", $usuarios );       
    }


}
