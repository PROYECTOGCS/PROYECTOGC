@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'contrato.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('full_name','Codigo de contrato')!!}
			{!! Form::text('Codigo_Contrato',null,['class'=>'form-control','required'=>'required']) !!}
		</div><div class="form-group">
			{!! Form::label('full_name','Numero de Aprovacion de contrato')!!}
			{!! Form::number('N_Aprovacion',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Fecha Aprovacion')!!}
			{!! Form::date('Fecha_Auto', \Carbon\Carbon::now(), ['class'=>'form-control','required'=>'required'] )!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Comprobante de aprovacion')!!}
			{!! Form::file('comprobante',['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Fecha Expedicion')!!}
			{!! Form::date('Fecha_Expedicion', \Carbon\Carbon::now(), ['class'=>'form-control','required'=>'required'] )!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Fecha Inicio Laboral')!!}
			{!! Form::date('Fecha_Inicio', \Carbon\Carbon::now(), ['class'=>'form-control','required'=>'required'] )!!}
		</div><div class="form-group">
			{!! Form::label('full_name','Fecha Final laboral')!!}
			{!! Form::date('Fecha_Final', \Carbon\Carbon::now(), ['class'=>'form-control','required'=>'required'] )!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Descripcion Al contrato')!!}
			{!! Form::textarea('Descripcion_Contrato',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Dias trabajados')!!}
			{!! Form::number('Dias_Trabajados',null,['class'=>'form-control','required'=>'required']) !!}
		</div><div class="form-group">
			{!! Form::label('full_name','Meses trabajados')!!}
			{!! Form::number('Meses_Trbajados',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Valor_Mes')!!}
			{!! Form::number('Valor_Mes',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Documento escaneado firmado por partes')!!}
			{!! Form::file('Archivo',['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Modo de Contratacion')!!}
			{!! Form::number('ID_modo',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Cargo vinculado al contrato')!!}
			{!! Form::number('ID_Cargo',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','CDP a vincular el contrato')!!}
			{!! Form::number('ID_CDP',null,['class'=>'form-control','required'=>'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::select('Estado',  array('Activo' => 'Activo', 'Desactivado' => 'Desactivado'), 'Activado', ['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection