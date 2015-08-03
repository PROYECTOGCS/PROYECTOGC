@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'clausula/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Formato</label>
            <input type="text" class="form-control" name = "Formato" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('clausula.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('clausula.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Formato</th> 
                  <th>Estado</th>               
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clausulas as $clausula)
                <tr>
                    <td>{{ $clausula->formato}}</td>
                    <td>{{ $clausula->estado}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('clausula.edit',['id' => $clausula->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('clausula/destroy',['id' => $clausula->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection