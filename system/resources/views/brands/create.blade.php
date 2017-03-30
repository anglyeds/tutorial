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
				{!! Form::open(array('route' => 'brands.store')) !!}

					<div class="form-group">
					{!! Form::label('client', 'Client') !!}
					<select class="form-control" name="client_id">
						@foreach($client as $value)
							<option value={{ $value->id }} >{{ $value->name }} </option>
						@endforeach							 				
					</select>
					</div>

					<div class="form-group">
					 {!! Form::label('brand', 'Brand') !!}
					 {!! Form::text('name', '' ,array('class' =>'form-control')) !!}
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