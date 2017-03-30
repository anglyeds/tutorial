@extends('layout.master')

@section('content')


<div class="container">

	<div class="row">	


		<div class="col-md-12">
		{!! Form::open(array('routes' => 'jobs.store')) !!}

		<div class="form-group">
			{!! Form::label('client', 'Client') !!}
			<select class="form-control" name="week">
				@foreach($client as $value)
					<option value={{ $value->id }} >{{ $value->name }} </option>
				@endforeach							 				
			</select>
		</div>

		<div class="form-group">
		{!! Form::label('jobs','Job Name') !!}
		{!! Form::text('jobs', '' ,array('class'=>'form-control')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('type','Type') !!}
		{!! Form::text('type', '' ,array('class'=>'form-control')) !!}
		</div>		

		<div class="form-group">
		{!! Form::label('remarks','Remarks') !!}
		{!! Form::text('remarks', '' ,array('class'=>'form-control')) !!}
		</div>		

		<div class="form-group">
			<div class="col-md-2" style="padding-left:0px !important;">
			{!! Form::label('week', 'Week') !!}
			<select class="form-control" name="week">
				<optgroup label="Weekday">
				@foreach($weekday as $value)
					<option value={{ $value->id }} >{{ $value->week }} </option>
				@endforeach
				</optgroup>	
				<optgroup label="Weekend">
				@foreach($weekend as $value)	
					<option value={{ $value->id }} >{{ $value->week }} </option>
				@endforeach
				</optgroup>								 				
			</select>
			</div>
		</div>

		<div class="form-group">
		{!! Form::checkbox('name', 'value', false, array('class'=>'form-control')) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}
		</div>


		{!! Form::close() !!}
		</div>


	</div>
</div>

@endsection