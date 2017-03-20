@extends('layout.master')

@section('content')

 <div class="container">
	 <div class="row">
	         <div class="col-md-4">

	         </div>	
	         <div class="col-md-4">
	         @if(count($errors))
	            <div class="alert alert-danger">
	                <ul>
	                @foreach($errors->all() as $error)
	                <li>{{ $error }}</li>
	                @endforeach
	                </ul>
	            </div>
	         @endif		       
				{!! Form::open(array('route' => 'weeks.store')) !!}

					<div class="form-group">
					 {!! Form::label('week', 'Week') !!}
					 {!! Form::text('week', '' ,array('class' =>'form-control')) !!}
					</div>

					<div class="form-group">
					 {!! Form::label('date_start', 'Date Start') !!}
					 {!! Form::date('date_start', \Carbon\Carbon::now(), array('class' =>'form-control')) !!}
					 </div>
					<div class="form-group">
					 {!! Form::label('date_end', 'Date End') !!}
					 {!! Form::date('date_end', \Carbon\Carbon::now(), array('class'=> 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}
					</div>
				{!! Form::close() !!}
			 </div>
			 <div class="col-md-4">

	         </div>

	</div>
</div>

@endsection