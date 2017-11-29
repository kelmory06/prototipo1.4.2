@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<h2>Crear nuevo Servicio</h2>
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
				{!! Form::open(['route' => 'servicios.store']) !!}
				<div class="form-group">
					{!! Form::label('idServicio','Identificacion del Servicio') !!}
					{!! Form::number('idServicio', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nombreServicio','Nombre del Servicio') !!}
					{!! Form::text('nombreServicio', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
			</div>
			<div class="panel panel-body">
				<table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>Id Servicio</th>
                  <th>Nombre Servicio</th>
                  <th colspan="2">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($servicios as $servicio)
                <tr>
                  <td>{{ $servicio->idServicio }}</td>
                  <td>{{ $servicio->nombreServicio }}</td>
                  <td>
                    {!! Form::model($servicio, ['route' => ['servicios.destroy', $servicio->idServicio], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
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