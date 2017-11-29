<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas = Venta::orderBy('id','ASC')->paginate(10);
        return view('ventas.index', compact('ventas'))
        ->with("ventas", $ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ventas.create');
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
        $venta = new Venta();
        $venta->servicio = $request->servicio;
        $venta->concepto = $request->concepto;
        $venta->valor = $request->valor;
        $venta->save();

        return redirect()->route('ventas.index')->with('info', 'La Venta se Registro con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
        return view('ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
        return view('ventas.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illu-minate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
        $venta->servicio = $request->servicio;
        $venta->concepto = $request->concepto;
        $venta->valor = $request->valor;
        $venta->save();

        return redirect()->route('ventas.index')->with('info', 'La Venta se Actualizo con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
        $venta->delete();
        return redirect()->route('ventas.index')->with('info', 'La Venta fue eliminada exitosamente');
    }
}
