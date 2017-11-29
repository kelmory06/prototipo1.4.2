@extends('layouts.app')

@section('content')

<div class="container">

      <div class="panel-heading">
      	<br>
      	<br>
      	<strong class="h3-responsive flex-item font-bold">Información del proveedor.
      	</strong>&nbsp;&nbsp;&nbsp;
      	<a href="{{route('citas.edit', $cita->id)}}" class="btn btn-indigo">Editar
      		<i  class="fa fa-pencil-square-o" aria-hidden="true"></i>
      	</a>   
</div>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-2">
			<p>Nit:&nbsp;{{$cita->id}}</p> 
			<!-- Imprimir el nombre del proveedor-->
			<p>Nombre proveedor:&nbsp;{{$cita->fechacita}}</p>
			<!-- Descripcion corta-->
			<p>Nombre de representante:&nbsp;{!!$cita->nomcliente!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Dirección:&nbsp;{!!$cita->nuip!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Teléfono:&nbsp;{!!$cita->ubicacion!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Nombre finca:&nbsp;{!!$cita->nomfinca!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Email:&nbsp;{!!$cita->email!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Telefono:&nbsp;{!!$cita->telefono!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Tipo:&nbsp;{!!$cita->tipo!!}</p> 
			<!-- Descripcion larga y se va interpretar-->
			<p>Observación:&nbsp;{!!$cita->observacion!!}</p> 
			<!-- Descripcion larga y se va interpretar--><!-- Descripcion larga y se va interpretar-->

		<a href="{{route('citas.index')}}" class="btn btn-indigo">Volver
      	<i class="fa fa-list-alt" aria-hidden="true"></i>
      	</a> 
		</div>
	</div>
</div>

@endsection