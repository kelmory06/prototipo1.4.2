<?php

namespace App\Http\Controllers;

use App\TipoCompra;
use Illuminate\Http\Request;

class TipoCompraController extends Controller
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
        return view('tipocompras.create');
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
        $tipocompra = new TipoCompra();
        $tipocompra->idTipoCompra = $request->idTipoCompra;
        $tipocompra->nombreTipoCompra = $request->nombreTipoCompra;
        $tipocompra->save();

        return redirect()->route('tipocompras.create',$tipocompra)->with('info','El nuevo tipo de compra ha sido agregado a la base de datos.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoCompra  $tipoCompra
     * @return \Illuminate\Http\Response
     */
    public function show(TipoCompra $tipoCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoCompra  $tipoCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoCompra $tipoCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoCompra  $tipoCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoCompra $tipoCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoCompra  $tipoCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoCompra $tipoCompra)
    {
        //
    }
}
