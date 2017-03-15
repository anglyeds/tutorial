@extends('layout.master')

@section('content')

<div class=container>
    <div class="row">
        <div class="col-md-4">
         
         </div>
        <div class="col-md-4">
         
         {!! Form::open(['url' => 'auth/register']) !!}

        <div class="form-group"> 
         {!! Form::label('name', 'Name') !!}
         {!! Form::text('username', array('class' => 'form-control')) !!}
        </div>

        <div class="form-group"> 
         {!! Form::label('password', 'Password') !!}
         {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group"> 
         {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
        <a href="{{ url('auth/register') }}"><input type="submit" value="Register" class="btn btn-danger"></a>
        </div>

        <div class="col-md-4">
         
        </div>

    </div>
</div>

@endsection