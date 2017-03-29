@extends('layout.master')

@section('content')


<div class="container">

	<div class="row">	


		<div class="col-md-12">
		{!! Form::open(array('routes' => 'clients.store')) !!}

		<div class="form-group">
		{!! Form::label('client','Client') !!}
		{!! Form::text('name', '' ,array('class'=>'form-control')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('description','Description') !!}
		{!! Form::text('description', '' ,array('class'=>'form-control')) !!}
		</div>		

		<div class="form-group">
		{!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}
		</div>


		{!! Form::close() !!}
		</div>


	</div>
</div>

@endsection