@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Lista de Ventas. <a href="{{ route('ventas.create') }}" class="btn btn-primary pull-right">Nueva</a></h2>
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
                  <th># Venta</th>
                  <th>Servicio</th>
                  <th>Concepto</th>
                  <th>Valor</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ventas as $venta)
                <tr>
                  <td>{{ $venta->id }}</td>
                  <td>{{ $venta->nomServicio->nombreServicio }}</td>
                  <td>{{ $venta->concepto }}</td>
                  <td>{{ $venta->valor }}</td>
                  <td><a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-primary pull-right">Ver</a></td>
                  <td><a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-primary pull-right">Editar</a></td>
                  <td>
                    {!! Form::model($venta, ['route' => ['compras.destroy', $venta->id], 'method' => 'DELETE']) !!}
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