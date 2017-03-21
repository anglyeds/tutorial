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
				{!! Form::open(array('route' => 'chains.store')) !!}

					<div class="form-group">
					 {!! Form::label('chain', 'Chain') !!}
					 {!! Form::text('name', '' ,array('class' =>'form-control')) !!}
					</div>

					<div class="form-group">
					 {!! Form::label('display_name', 'Chain Name') !!}
					 {!! Form::text('display_name', '' ,array('class' =>'form-control')) !!} 
					 </div>
					<div class="form-group">
					 {!! Form::label('description', 'Description') !!}
					 {!! Form::text('description', '' ,array('class' =>'form-control')) !!}
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