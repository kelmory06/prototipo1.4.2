@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Ingresar nueva Venta</h2>
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
			<div class="panel panel-body">
				{!! Form::model($venta, array('route' => array('ventas.update', $venta->id), 'method' => 'PUT')) !!}
				<div class="form-group">
					{!! Form::label('servicio','Tipo de Servicio') !!}
					{!! Form::number('servicio', $venta->servicio, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('concepto','Concepto de venta') !!}
					{!! Form::text('concepto', $venta->concepto, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('valor','Valor de la venta') !!}
					{!! Form::number('valor', $venta->valor, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					<a href="{{ route('ventas.index') }}" class="btn btn-primary pull-right">Volver</a>
				</div>
				{!! Form::close() !!}
			</div>
        </div>
    </div>
</div>
@endsection