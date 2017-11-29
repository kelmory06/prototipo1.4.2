@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Informacion del cliente. <a href="{{ route('clientes.edit', $cliente->numeroId) }}" class="btn btn-primary pull-right">Editar</a></h2>
            <div class="panel panel-default">
            	<table class="table table-stripped table-hover">
					<tbody>
						<tr>
							<td>Documento</td>
							<td>{{ $cliente->numeroId }}</td>
						</tr>
						<tr>
							<td>Nombre</td>
							<td>{{ $cliente->nombre }}</td>
						</tr>
						<tr>
							<td>Telefono</td>
							<td>{{ $cliente->telefono }}</td>
						</tr>
						<tr>
							<td>Ubicacion</td>
							<td>{{ $cliente->ubicacion }}</td>
						</tr>
						<tr>
							<td>E-Mail</td>
							<td>{{ $cliente->e_mail }}</td>
						</tr>
						<tr>
							<td>Identificacion del Encargado</td>
							<td>{{ $cliente->idEncargado }}</td>
						</tr>
						<tr>
							<td>Id del Encargado</td>
							<td>{{ $cliente->idEncargado }}</td>
						</tr>
						<tr>
							<td>Nombre del Encargado</td>
							<td>{{ $cliente->nombreEncargado }}</td>
						</tr>
						<tr>
							<td>Telefono del Encargado</td>
							<td>{{ $cliente->telefonoEncargado }}</td>
						</tr>
					</tbody>
				</table>
            </div>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary pull-right">Volver</a>

        </div>
    </div>
</div>
@endsection