@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Crear nuevo Cliente</h2>
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
				{!! Form::open(['route' => 'clientes.store']) !!}
				<div class="form-group">
					{!! Form::label('numeroId','Numero de Identificacion') !!}
					{!! Form::number('numeroId', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombre','Nombre') !!}
					{!! Form::text('nombre', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telefono','Telefono') !!}
					{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('finca','Nombre de la Finca') !!}
					{!! Form::text('finca', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ubicacion','Ubicacion de la finca') !!}
					{!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('e_mail','E-Mail del Cliente') !!}
					{!! Form::text('e_mail', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('idEncargado','Identificacion del Encargado') !!}
					{!! Form::number('idEncargado', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombreEncargado','Nombre del Encargado') !!}
					{!! Form::text('nombreEncargado', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telefonoEncargado','Telefono del Encargado') !!}
					{!! Form::text('telefonoEncargado', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a href="{{ route('clientes.index') }}" class="btn btn-primary pull-right">Volver</a>
				</div>
				{!! Form::close() !!}
			</div>
        </div>
    </div>
</div>
@endsection