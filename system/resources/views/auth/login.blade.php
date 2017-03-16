@extends('layout.master')

@section('content')

<div class=container>
    <div class="row">
    <h1 class="text-center">SMA Merchandising Web</h1>
        <div class="col-md-4">
         
         </div>
        <div class="col-md-4">
         
         {!! Form::open(array('route' => 'handleLogin')) !!}

        <div class="form-group">
          <select class="form-control" name="username">
          @foreach($user as $value)
          <option>{{ $value->name }} </option>
          @endforeach
          </select>
         {!! Form::label('email', 'Email') !!}
         {!! Form::text('email',null,array('class' => 'form-control')) !!}

        </div>
        <div class="form-group"> 

         {!! Form::label('password', 'Password') !!}
         {!! Form::password('password', array('class' => 'form-control')) !!}

        </div>
        <div class="form-group">
         {!! Form::token() !!}
         {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}

       <!--  <a href="{{ url('auth/register') }}"><input type="submit" value="Register" class="btn btn-danger"></a> -->
        
        </div>
        <div class="col-md-4">
         
        </div>
    </div>
</div>

@endsection