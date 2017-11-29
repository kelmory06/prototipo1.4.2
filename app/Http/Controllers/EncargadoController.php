<?php

namespace App\Http\Controllers;

use App\Encargado;
use Illuminate\Http\Request;
use App\cliente;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('encargados.create');
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
        $encargado = new Encargado();
        $encargado->idEncargado = $request->idEncargado;
        $encargado->nombreEncargado = $request->nombreEncargado;

        $encargado->save();
        return redirect()->route('encargados.create',$encargado)->with('info', 'El Nuevo Encargado Fue Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function show(Encargado $encargado)
    {
        //
        return view('encargados.show', compact('encargado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function edit(Encargado $encargado)
    {
        //
        return view('encargados.edit', compact('encargado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encargado $encargado)
    {
        //
        $encargado->idEncargado = $request->idEncargado;
        $encargado->nombreEncargado = $request->nombreEncargado;
        $encargado->save();

        return redirect()->route('encargados.show',$encargado)->with('info', 'El Encargado Fue Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encargado  $encargado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encargado $encargado)
    {
        //
        $encargado->delete();
        return redirect()->route('encargados.create', $encargado)->with('info', 'El Encargado fue eliminado exitosamente');
    }
}
