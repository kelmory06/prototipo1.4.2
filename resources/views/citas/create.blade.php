@extends('layouts.app')
@section('content')

<div class="container ">
      <div class="panel-heading"><h3>Crear una nueva cita.<a href="{{route('citas.index')}}" class="btn btn-primary">Volver<i class="fa fa-list-alt" aria-hidden="true"></i></a></h3>
      </div>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
{!!Form::open(['route'=>'citas.store'])!!}
<br>
<br>
@include('citas.fragment.form')
{!!Form::close()!!}

</div>
    </div>
</div>

@endsection