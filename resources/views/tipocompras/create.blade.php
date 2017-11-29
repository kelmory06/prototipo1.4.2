@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Nuevo Tipo de Compra</h2>
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
				@if(Session::has('info'))
          		<div class="alert alert-info">
            		<button type="button" class="close" data-dismiss="alert">
              			<span>&times;</span>
            		</button>
            		{{ Session::get('info') }}
          		</div>
          		@endif
				{!! Form::open(['route' => 'tipocompras.store']) !!}
				<div class="form-group">
					{!! Form::label('idTipoCompra','Id del Tipo de Compra') !!}
					{!! Form::number('idTipoCompra', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombreTipoCompra','nombre del Tipo de Compra') !!}
					{!! Form::text('nombreTipoCompra', null, array('class' => 'form-control')) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection