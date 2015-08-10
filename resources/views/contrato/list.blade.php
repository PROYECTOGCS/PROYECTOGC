@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'contrato/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="contrato">Codigo Contrato</label>
			<input type="text" class="form-control" name="Codigo_Contrato">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('contrato.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('contrato.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>id</th>
						<th>Codigo contrato</th>
						<th>Numero unico de Aprovacion</th>
						<th>Fecha en la que se Aprovo el contrato</th>
						<th>Documento comprovante de autorzacion del contrato</th>
						<th>Fecha que se expidio el contrato</th>
						<th>Fecha inicio laboral</th>
						<th>Fecha Final laboral</th>
						<th>Decripcion contrato</th>
						<th>Dias a trabajar por mes</th>
						<th>Meses a trabajar</th>
						<th>Valor por mes</th>
						<th>Documento firmado por partes</th>
						<th>ID Modo</th>
						<th>ID Cargo</th>
						<th>ID CDP</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contratos as $contrato)
					<tr>
						<td>{{$contrato->id}}</td>
						<td>{{$contrato->Codigo_Contrato}}</td>
						<td>{{$contrato->N_Aprovacion}}</td>
						<td>{{$contrato->Fecha_Auto}}</td>
						<td>{{$contrato->Comprobacion}}</td>
						<td>{{$contrato->Fecha_Expedicion}}</td>
						<td>{{$contrato->Fecha_Inicio}}</td>
						<td>{{$contrato->Fecha_Final}}</td>
						<td>{{$contrato->Descripcion_Contrato}}</td>
						<td>{{$contrato->Dias_Trabajados}}</td>
						<td>{{$contrato->Meses_Trbajados}}</td>
						<td>{{$contrato->Valor_Mes}}</td>
						<td>{{$contrato->Archivo}}</td>
						<td>{{$contrato->ID_modo}}</td>
						<td>{{$contrato->ID_Cargo}}</td>
						<td>{{$contrato->ID_CDP}}</td>
						<td>{{$contrato->Estado}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('contrato.edit',['id'=> $contrato->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('contrato/destroy',['id'=> $contrato->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection