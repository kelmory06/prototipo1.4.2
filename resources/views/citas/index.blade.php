@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Lista de Citas. <a href="{{ route('citas.create') }}" class="btn btn-primary pull-right">Nuevo<i class="fa fa-plus-circle" aria-hidden="true"></i></a></h2>
          @if(Session::has('info'))
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            {{ Session::get('info') }}
          </div>
          @endif
            <div class="panel panel-default table-responsive">
            	
              <table class="table table-hover table-striped">
	    		<thead>
	        		<tr>
        				<th class="text-center">id</th>
                <th class="text-center">Fecha cita</th>
                <th class="text-center">Nombre cliente</th>
                <th class="text-center">Nuip</th>
                <th class="text-center">Ubicacion</th>  
                <th class="text-center">Nombre finca</th>
                <th class="text-center">Email</th>
        				<th class="text-center">Telefono</th>
                <th class="text-center" >Tipo</th>  
                <th class="text-center">Accion</th>
        				<th colspan="3">&nbsp;</th>
        			</tr>
				  </thead>
				  <tbody>
              @foreach($citas as $cita)
         			<tr>

          				<td>{{ $cita->id }}</td>
          				<td>{{ $cita->fechacita }}</td>
          				<td>{{ $cita->nomcliente }}</td>
          			  <td>{{ $cita->nuip }}</td> 
                  <td>{{ $cita->ubicacion }}</td>
                  <td>{{ $cita->nomfinca }}</td>
                  <td>{{ $cita->email}}</td>
                  <td>{{ $cita->telefono}}</td>
                  <td>{{ $cita->tipo}}</td>
            
          				<td><a href="{{ route('citas.show', $cita->id) }}" class="btn btn-default btn-xs">Ver</a></td>
          				<td><a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-primary btn-xs">Editar</a></td>
          				<td>
          					{!! Form::model($cita, ['route' => ['citas.destroy', $cita->id], 'method' => 'DELETE']) !!}
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