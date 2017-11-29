@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Informacion del Encargado.</h2>
            <div class="panel panel-default">
            	<table class="table table-stripped table-hover">
            		<tbody>
						<tr>
							<td>Documento</td>
							<td>{{ $encargado->idEncargado }}</td>
						</tr>
						<tr>
							<td>Nombre</td>
							<td>{{ $encargado->nombreEncargado }}</td>
						</tr>
					</tbody>
            	</table>
            </div>
            <a href="{{ route('encargados.edit', $encargado->idEncargado) }}" class="btn btn-primary pull-right">Editar</a>
            {!! Form::model($encargado, ['route' => ['encargados.destroy', $encargado->idEncargado], 'method' => 'DELETE']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            <input type="button" value="cerrar" onclick="self.close()" />
        </div>
    </div>
</div>
@endsection