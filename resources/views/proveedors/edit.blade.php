@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Editar Proveedor</h2>
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
				{!! Form::model($proveedor, array('route' => array('proveedors.update', $proveedor->nit), 'method' => 'PUT')) !!}
				<div class="form-group">
					{!! Form::label('nit','Numero de Identificacion') !!}
					{!! Form::number('nit',$proveedor->nit, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('razonSocial','Nombre del Proveedor') !!}
					{!! Form::text('razonSocial',$proveedor->razonSocial, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telefono','Telefono') !!}
					{!! Form::text('telefono',$proveedor->telefono , ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('direccion','Direccion') !!}
					{!! Form::text('direccion', $proveedor->direccion , ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('e_mail','E-Mail del Proveedor') !!}
					{!! Form::text('e_mail',$proveedor->e_mail, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a href="{{ route('proveedors.index') }}" class="btn btn-primary pull-right">Volver</a>
				</div>
				{!! Form::close() !!}
			</div>
        </div>
    </div>
</div>
@endsection