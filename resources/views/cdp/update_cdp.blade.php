@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($cdp,['route'=>'cdp.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$cdp->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','ID_Cdp')!!}
			{!! Form::text('id_cdp',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','ID_Area')!!}
			{!! Form::text('id_area',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Fecha Expedido')!!}
			{!! Form::date('fechaExp', null,  ['class'=>'form-control','required'=>'required'] )!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Fecha de Inicio del Cdp')!!}
			{!! Form::date('fechai', null,  ['class'=>'form-control','required'=>'required'])!!}
		</div><div class="form-group">
			{!! Form::label('full_name','Fecha de Finalizacion del Cdp')!!}
			{!! Form::date('fechaf', null,  ['class'=>'form-control','required'=>'required'] )!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Descripcion')!!}
			{!! Form::textarea('descripcion',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Comprobante')!!}
			{!! Form::file('comprobante',['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Presupuesto')!!}
			{!! Form::text('presupuesto',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Estado')!!}
			{!! Form::select('estado',  array('Activo' => 'Activo', 'Desactivado' => 'Desactivado'), 'Activado', ['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection