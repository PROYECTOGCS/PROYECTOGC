@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($clausula,['route'=>'clausula.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$clausula->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','Formato')!!}
			{!! Form::text('formato',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
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