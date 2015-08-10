@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'supervisor.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('full_name','Cedula')!!}
			{!! Form::text('cedula',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Cargo')!!}
			{!! Form::select('cargo',  array('Supervisor Administrador' => 'Supervisor Administrador', 'Supervisor Ayudante' => 'Supervisor Ayudante'), null,  ['class'=>'form-control','required'=>'required']) !!}		
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