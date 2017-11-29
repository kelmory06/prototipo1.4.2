@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Lista de Proveedores. <a href="{{ route('proveedors.create') }}" class="btn btn-primary pull-right">Nuevo</a></h2>
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
        				<th>Identificacion</th>
        				<th>Razon Social</th>
        				<th>Telefono</th>
        				<th>Direccion</th>
                <th>E-mail</th>
        				<th colspan="2">&nbsp;</th>
        			</tr>
				  </thead>
				  <tbody>
        			@foreach($proveedors as $proveedor)
         			<tr>
          				<td>{{ $proveedor->nit }}</td>
          				<td>{{ $proveedor->razonSocial }}</td>
          				<td>{{ $proveedor->telefono }}</td>
          				<td>{{ $proveedor->direccion }}</td>
                  <td>{{ $proveedor->e_mail }}</td>
          				<td><a href="{{ route('proveedors.edit', $proveedor->nit) }}" class="btn btn-primary pull-right">Editar</a></td>
          				<td>
          					{!! Form::model($proveedor, ['route' => ['proveedors.destroy', $proveedor->nit], 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
                    {!! Form::close() !!}
          				</td>
         			</tr>
        			@endforeach
    			</tbody>
            </div>
        </div>
    </div>
</div>

@endsection