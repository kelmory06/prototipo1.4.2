@extends('layouts.app')
@section('content')
 <div class="col-md-10 col-md-offset-1  panel-default">
      <div class="panel-heading"><Strong>Editar citas</Strong>.&nbsp;&nbsp;<a href="{{route('citas.index')}}" class="btn btn-default "><i class="fa fa-list-alt" aria-hidden="true"></i></a>
     </div>
<div class="panel-body">
<div class="col-md-12">
{!!Form::model( $cita,['route'=>['citas.update', $cita->id], 'method'=>'PUT']) !!}<!--Se le pasa, la variable del metodo-->
@include('citas.fragment.form') <!--Incluyo el formulario-->
{!!Form::close()!!}
</div>
</div>
</div>
@endsection