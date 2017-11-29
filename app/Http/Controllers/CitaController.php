<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $citas= Cita::orderBy('id')->paginate(10);
         return view('citas.index', compact('citas'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita(); 
        $cita->fechacita=$request->fechacita;
        $cita->nomcliente=$request->input('nomcliente');   
        $cita->nuip=$request->nuip;   
        $cita->ubicacion=$request->ubicacion;  
        $cita->nomfinca=$request->nomfinca;   
        $cita->email=$request->email;   
        $cita->telefono=$request->telefono;  
        $cita->tipo=$request->tipo; 
        $cita->observacion=$request->observacion;
        $cita->save();




             return redirect()->route('citas.index')->with('info', 'El Nuevo Cliente Fue Creado con Exito');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $cita=cita::find($id);
        return view('citas.show',compact('cita'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cita=cita::find($id);
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cita = cita::find($id);
        $cita->fechacita=$request->fechacita;
        $cita->nomcliente=$request->nomcliente;   
        $cita->nuip=$request->nuip;   
        $cita->ubicacion=$request->ubicacion;  
        $cita->nomfinca=$request->nomfinca;   
        $cita->email=$request->email;   
        $cita->telefono=$request->telefono;  
        $cita->tipo=$request->tipo; 
        $cita->observacion=$request->observacion;
        $cita->save();

             return redirect()->route('citas.index')->with('info', 'El  Cliente Fue Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $cita= Cita::find($id);
        $cita->delete();
         return back()->with('info', 'El cliente fue eliminado exitosamente');
    }
}
