@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Editar Cliente</h2>
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
				{!! Form::model($cliente, array('route' => array('clientes.update', $cliente->numeroId), 'method' => 'PUT')) !!}
				<div class="form-group">
					{!! Form::label('numeroId','Numero de Identificacion') !!}
					{!! Form::number('numeroId', $cliente->numeroId, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombre','Nombre') !!}
					{!! Form::text('nombre', $cliente->nombre, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telefono','Telefono') !!}
					{!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('finca','Nombre de la Finca') !!}
					{!! Form::text('finca', $cliente->finca, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ubicacion','Ubicacion de la finca') !!}
					{!! Form::text('ubicacion', $cliente->ubiacion, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('e_mail','E-Mail del Cliente') !!}
					{!! Form::text('e_mail', $cliente->e_mail, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('idEncargado','Identificacion del Encargado') !!}
					{!! Form::number('idEncargado', $cliente->idEncargado, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombreEncargado','Nombre del Encargado') !!}
					{!! Form::text('nombreEncargado', $cliente->nombreEncargado, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telefonoEncargado','Telefono del Encargado') !!}
					{!! Form::text('telefonoEncargado', $cliente->telefonoEncargado, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Actualiar</button>
					<a href="{{ route('clientes.index') }}" class="btn btn-primary pull-right">Volver</a>
				</div>
				{!! Form::close() !!}
			</div>
        </div>
    </div>
</div>
@endsection