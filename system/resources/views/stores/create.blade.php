@extends('layout.master')

@section('content')

 <div class="container">
	 <div class="row">
	         <div class="col-md-3">

	         </div>	
	         <div class="col-md-6">
	         @if(count($errors))
	            <div class="alert alert-danger">
	                <ul>
	                @foreach($errors->all() as $error)
	                <li>{{ $error }}</li>
	                @endforeach
	                </ul>
	            </div>
	         @endif		       
				{!! Form::open(array('route' => 'stores.store')) !!}

			        <div class="form-group">
			          {!! Form::label('chain', 'Chain') !!}
			          <select class="form-control" name="chain_id">
			          @foreach($chain as $value)
			          	<option value={{ $value->id }} >{{ $value->name }} </option>
			          @endforeach
			          </select>


			        </div>


					<div class="form-group">
					 {!! Form::label('code', 'Store Code') !!}
					 {!! Form::number('code', 0 ,array('class' =>'form-control', 'min' => '0')) !!}
					 
					 </div>

					<div class="form-group">
					 {!! Form::label('name', 'Store Name') !!}
					 {!! Form::text('name', '' ,array('class' =>'form-control')) !!} 
					 </div>

					<div class="form-group">
					 {!! Form::label('address', 'Store Address') !!}
					 {!! Form::text('address', '' ,array('class' =>'form-control')) !!} 
					 </div>

					<div class="form-group">
					 {!! Form::label('display_name', 'Display Name') !!}
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
			 <div class="col-md-3">

	         </div>

	</div>
</div>





@endsection