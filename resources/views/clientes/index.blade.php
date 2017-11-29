@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="col-md-8 col-md-offset-2">
        	<h2>Lista de Clientes. <a href="{{ route('clientes.create') }}" class="btn btn-primary pull-right">Nuevo</a></h2>
          @if(Session::has('info'))
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            {{ Session::get('info') }}
          </div>
          @endif
            <div class="panel panel-default">
            	<table class="table table-hover table-striped">
	    		<thead>
	        		<tr>
        				<th>numero ID</th>
        				<th>Nombre</th>
        				<th>Ubicacion</th>
        				<th>Telefono</th>
                <th>Encargado</th>
        				<th colspan="3">&nbsp;</th>
        			</tr>
				  </thead>
				  <tbody>
        			@foreach($clientes as $cliente)
         			<tr>
          				<td>{{ $cliente->numeroId }}</td>
          				<td>{{ $cliente->nombre }}</td>
          				<td>{{ $cliente->ubicacion }}</td>
          				<td>{{ $cliente->telefono }}</td>
                  <td>{{ $cliente->nombreEncargado }}</td>
          				<td><a href="{{ route('clientes.show', $cliente->numeroId) }}" class="btn btn-primary pull-right">Ver</a></td>
          				<td><a href="{{ route('clientes.edit', $cliente->numeroId) }}" class="btn btn-primary pull-right">Editar</a></td>
          				<td>
          					{!! Form::model($cliente, ['route' => ['clientes.destroy', $cliente->numeroId], 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
          				</td>
         			</tr>
        			@endforeach
    			</tbody>
            </div>
        </div>
    
</div>

@endsection