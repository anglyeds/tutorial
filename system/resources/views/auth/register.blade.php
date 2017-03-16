@extends('layout.master')

@section('content')


<!-- Collective Form -->
 {!! 
 Form::macro('myField', function()
    {
        return '<input type="text" class="form-control" name=username>';
    });
 !!}

<div class=container>
    <h1 class="text-center">SMA Merchandising Web</h1>
    <div class="row">
        <div class="col-md-4">

         </div>
         
        <div class="col-md-4">
         
         {!! Form::open(['url' => 'auth/register']) !!}

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
         {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
        </div>

        <div class="col-md-4">
         
        </div>

    </div>
</div>

@endsection