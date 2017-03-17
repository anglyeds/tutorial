@extends('layout.master')

@section('content')

 {!! 
 Form::macro('myField', function()
    {
        return '<input type="text" class="form-control" name="name">';
    });
 !!}
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
         {!! Form::open(array('route' => 'users.store')) !!}
				<div class="form-group"> 
		         {!! Form::label('name', 'Name') !!}
		         {!! Form::myField(); !!}         
		        </div>

		        <div class="form-group"> 
		         {!! Form::label('email', 'Email Address') !!}
		         {!! Form::text('email',Input::old('email'),array('class' => 'form-control')); !!}         
		        </div>

		        <div class="form-group"> 
		         {!! Form::label('password', 'Password') !!}
		         {!! Form::password('password', array('class' => 'form-control')) !!}
		        </div>

		        <div class="form-group"> 
		         {!! Form::token() !!}
		 		 {!! Form::submit(null, array('class' =>'btn btn-primary form-control')) !!}
		        </div>

		 {!! Form::close() !!}
         </div>
          <div class="col-md-4">

         </div>
 
 </div>
 </div>
@endsection