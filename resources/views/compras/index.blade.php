@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Lista de Compras. <a href="{{ route('compras.create') }}" class="btn btn-primary pull-right">Nueva</a></h2>
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
                  <th>ID</th>
                  <th>Fecha Compra</th>
                  <th>Tipo Compra</th>
                  <th>Proveedor</th>
                  <th>Concepto</th>
                  <th>Valor</th>
                  <th>Total</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($compras as $compra)
                <tr>
                  <td>{{ $compra->idCompra }}</td>
                  <td>{{ $compra->fechaCompra }}</td>
                  <td>{{ $compra->nomTipoCompra->nombreTipoCompra }}</td>
                  <td>{{ $compra->nomProveedor->razonSocial }}</td>
                  <td>{{ $compra->concepto }}</td>
                  <td>{{ $compra->valorCompra }}</td>
                  <td>{{ $compra->valorTotalCompra }}</td>
                  <td><a href="{{ route('compras.show', $compra->idCompra) }}" class="btn btn-primary pull-right">Ver</a></td>
                  <td><a href="{{ route('compras.edit', $compra->idCompra) }}" class="btn btn-primary pull-right">Editar</a></td>
                  <td>
                    {!! Form::model($compra, ['route' => ['compras.destroy', $compra->idCompra], 'method' => 'DELETE']) !!}
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