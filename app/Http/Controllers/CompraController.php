<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use App\TipoCompra;
use App\Proveedor;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras = Compra::orderBy('fechaCompra', 'DESC')->paginate(10);
        $proveedors = Proveedor::all();
        $tipocompras = TipoCompra::all();
        return view('compras.index', compact('compras'))
        ->with('proveedors', $proveedors)
        ->with('tipocompras', $tipocompras)
        ->with('compras', $compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('compras.create');
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
        $compra = new Compra();
        $compra->idCompra = $request->idCompra;
        $compra->tipoCompra = $request->tipoCompra;
        $compra->nitProveedor = $request->nitProveedor;
        $compra->fechaCompra = $request->fechaCompra;
        $compra->concepto = $request->concepto;
        $compra->valorCompra = $request->valorCompra;
        $condicion = $request->condicion;
        if ($condicion == 1) {
            $compra->valorTotalCompra = $compra->valorCompra * 0.19;
        }elseif ($condicion == 2) {
            $compra->valorTotalCompra = $compra->valorCompra * 0.16;
        }else{
            $compra->valorTotalCompra = $compra->valorCompra;
        }
        $compra->save();
        return redirect()->route('compras.index', $compra)->with('info', 'La compra fue ingresada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
        return view('compras.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
        return view('compras.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
        $compra->idCompra = $request->idCompra;
        $compra->tipoCompra = $request->tipoCompra;
        $compra->nitProveedor = $request->nitProveedor;
        $compra->fechaCompra = $request->fechaCompra;
        $compra->concepto = $request->concepto;
        $compra->valorCompra = $request->valorCompra;
        $condicion = $request->condicion;
        if ($condicion == 1) {
            $compra->valorTotalCompra = $compra->valorCompra * 0.16;
        }elseif ($condicion == 2) {
            $compra->valorTotalCompra = $compra->valorCompra * 0.19;
        }else{
            $compra->valorTotalCompra = $compra->valorCompra;
        }
        $compra->save();
        return redirect()->route('compras.show', $compra)->with('info', 'La compra fue actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
        $compra->delete();
        return redirect()->route('compras.index')->with('info', 'La compra fue eliminado exitosamente');
    }

    public function buscar_TipoCompras($tipo)
    {
        $compras = Compra::Busqueda($tipo)->paginate(10);
        $tipocompras = tipoCompra::all();
        $tiposel = $tipocompras->find($tipo);
        return view('compras.index')
        ->with("tipos", $tipocompras)
        ->with("tiposel", $tiposel)
        ->with("compras", $compras);

    }

}
