@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Informacion de la Venta {{ $venta->id }} .</h2>
        	<div class="panel panel-default">
            	<table class="table table-stripped table-hover">
					<tbody>
						<tr>
							<td>Servicio</td>
							<td>{{ $venta->nomServicio->nombreServicio }}</td>
						</tr>
						<tr>
							<td>Concepto</td>
							<td>{{ $venta->concepto }}</td>
						</tr>
						<tr>
							<td>Valor</td>
							<td>{{ $venta->valor }}</td>
						</tr>
					</tbody>
				</table>
            </div>
            <a href="{{ route('ventas.index') }}" class="btn btn-primary pull-left">Volver</a>
            <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-primary pull-right">Editar</a>
        </div>
    </div>
</div>
@endsection