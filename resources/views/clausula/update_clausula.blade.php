@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($clausula,['route' => 'clausula.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('ID_Clausula', $clausula->ID_Clausula) !!}
            
                <div class="form-group">
                      {!! Form::lab'full_name', 'Formato') !!}
                      {!! Form::text('Formato', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>                           
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection