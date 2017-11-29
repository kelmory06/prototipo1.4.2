
<div clas="row">
<div class="form-group">
{!!Form::label('fechacita','Fecha cita.')!!}
{!!Form::date('fechacita',null,['class'=>'form-control','placeholder'=>'','required'=>'required'])!!} 
</div>

<div class="form-group">
{!! Form::label('nomcliente','Nombre cliente')!!}
{!!Form::text('nomcliente',null,['class'=>'form-control',  'placeholder'=>''])!!}
</div>

<div class="form-group">
{!! Form::label('nuip','Numero de cedula')!!}
{!!Form::text('nuip',null,['class'=>'form-control',  'placeholder'=>''])!!}
</div>

<div class="form-group">
{!!Form::label('ubicacion','Ubicacion')!!}
{!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>


<div class="row">
<div class="col-sm-4">
<div class="form-group">
{!!Form::label('nomfinca','Nombre finca')!!}
{!!Form::text('nomfinca',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
{!!Form::label('email','Correo electronico')!!}
{!!Form::email('email',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
{!!Form::label('telefono','Telefono')!!}
{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>
</div>


<div class="col-sm-12">
<div class="form-group">
{!!Form::label('tipo','Tipo de Servicio')!!}
{!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
{!!Form::label('observacion','Observacion')!!}
{!!Form::textarea('observacion',null,['class'=>'form-default','placeholder'=>''])!!}
</div>
</div>

<div class="form-group text-center">
<button type="submit" class="btn btn-default">Guardar</button>
</div>