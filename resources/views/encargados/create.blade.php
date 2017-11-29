@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Crear nuevo Encargado</h2>
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
				{!! Form::open(['route' => 'encargados.store']) !!}
				<div class="form-group">
					{!! Form::label('idEncargado','Identificacion del Encargado') !!}
					{!! Form::number('idEncargado', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombreEncargado','Nombre del Encargado') !!}
					{!! Form::text('nombreEncargado', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}	

			</div>
			<input type="button" value="cerrar" onclick="self.close()" />
        </div>
    </div>
</div>
@endsection