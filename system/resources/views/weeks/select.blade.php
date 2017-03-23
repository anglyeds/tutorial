@extends('layout.master')

@section('content')

<div class="container">

	<div class="row">
		{!! Form::open(array('route' => 'jobs.store')) !!}
			
		<div class="col-md-3">
		</div>

		<div class="col-md-6">
			<div class="form-group">
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
			{!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}	
		</div>		
		<div class="col-md-3">
		</div>

		{!! Form::close() !!}

	</div>
</div>
@endsection