@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'cdp/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="cdp">Id_Cdp</label>
			<input type="text" class="form-control" name="id_cdp">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('cdp.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('cdp.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Codigo del CDP en el Sistema</th>
						<th>Id_cdp</th>
						<th>Id_Area</th>
						<th>Fecha Expedido</th>
						<th>Fecha Inicio</th>
						<th>Fecha Final</th>
						<th>Descripcion</th>
						<th>Comprobante</th>
						<th>Presupuesto</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cdps as $cdp)
					<tr>
						<td>{{$cdp->id}}</td>
						<td>{{$cdp->id_cdp}}</td>
						<td>{{$cdp->id_area}}</td>
						<td>{{$cdp->fechaExp}}</td>
						<td>{{$cdp->fechai}}</td>
						<td>{{$cdp->fechaf}}</td>
						<td>{{$cdp->descripcion}}</td>
						<td>{{$cdp->comprobante}}</td>
						<td>{{$cdp->presupuesto}}</td>
						<td>{{$cdp->estado}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('cdp.edit',['id'=> $cdp->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('cdp/destroy',['id'=> $cdp->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection