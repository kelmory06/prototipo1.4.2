@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Informacion de la Compra.</h2>
            <div class="panel panel-default">
            	<table class="table table-stripped table-hover">
            		<tbody>
						<tr>
							<td>Numero de Factura</td>
							<td>{{ $compra->idCompra }}</td>
						</tr>
						<tr>
							<td>Tipo de Compra</td>
							<td>{{ $compra->nomTipoCompra->nombreTipoCompra }}</td>
						</tr>
                        <tr>
                            <td>Nombre Proveedor</td>
                            <td>{{ $compra->nomProveedor->razonSocial }}</td>
                        </tr>
                        <tr>
                            <td>Fecha Compra</td>
                            <td>{{ $compra->fechaCompra }}</td>
                        </tr>
                        <tr>
                            <td>Concepto de la Compra</td>
                            <td>{{ $compra->concepto }}</td>
                        </tr>
                        <tr>
                            <td>Valor sin Iva</td>
                            <td>{{ $compra->valorCompra }}</td>
                        </tr>
                        <tr>
                            <td>Valor con Iva</td>
                            <td>{{ $compra->valorTotalCompra }}</td>
                        </tr>
					</tbody>
            	</table>
            </div>
            <a href="{{ route('compras.index') }}" class="btn btn-primary pull-right">volver</a>
        </div>
    </div>
</div>
@endsection