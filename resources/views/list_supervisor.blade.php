@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'supervisor/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="supervisor">Cedula</label>
			<input type="text" class="form-control" name="cedula">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('supervisor.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('supervisor.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Cedula</th>
						<th>Nombre</th>
						<th>Cargo</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($supervisores as $supervisor)
					<tr>
						<td>{{$supervisor->cedula}}</td>
						<td>{{$supervisor->nombre}}</td>
						<td>{{$supervisor->cargo}}</td>
						<td>{{$supervisor->estado}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('supervisor.edit',['id'=> $supervisor->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('supervisor/destroy',['id'=> $supervisor->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection