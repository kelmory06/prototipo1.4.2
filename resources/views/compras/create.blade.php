@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Ingresar nueva Compra</h2>
        	<div class="panel panel-body">
				@if(count($errors))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">
						&times;
					</button>
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::open(['route' => 'compras.store']) !!}
				<div class="form-group">
					{!! Form::label('idCompra','Id Compra') !!}
					{!! Form::number('idCompra', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('tipoCompra','Tipo de compra') !!}<br>
					{!! Form::label('tipoCompra','Compra a Distribuidores') !!}
					{!! Form::radio('tipoCompra', '1') !!}<br>
					{!! Form::label('tipoCompra','Viaticos') !!}
					{!! Form::radio('tipoCompra', '2') !!}<br>
					{!! Form::label('tipoCompra','Materiales y suministros') !!}
					{!! Form::radio('tipoCompra', '3') !!}<br>
					{!! Form::label('tipoCompra','Gastos Administrativos') !!}
					{!! Form::radio('tipoCompra', '4') !!}<br>
				</div>
				<div class="form-group">
					{!! Form::label('nitProveedor','Nit Proveedor') !!}
					{!! Form::number('nitProveedor', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('fechaCompra','Fecha de la Compra') !!}
					{!! Form::date('fechaCompra', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('concepto','Concepto de Compra') !!}
					{!! Form::text('concepto', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('valorCompra','Valor de la compra (sin IVA)') !!}
					{!! Form::number('valorCompra', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{{ Form::label('condicion', 'sin Iva') }}
					{{ Form::radio('condicion', '') }}<br>
					{{ Form::label('condicion', 'Iva de 16%') }}
					{{ Form::radio('condicion', '1') }}<br>
					{{ Form::label('condicion', 'Iva de 19%') }}
					{{ Form::radio('condicion', '2') }}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a href="{{ route('compras.index') }}" class="btn btn-primary pull-right">Volver</a>
				</div>
				{!! Form::close() !!}
			</div>
        </div>
    </div>
</div>
@endsection