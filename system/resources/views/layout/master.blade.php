<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Merch</title>

    <!-- Bootstrap -->
    <link href="{{ asset('system/node_modules/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('system/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>


  </head>
  <body>
  <div class="container">
    <ul class="nav nav-pills">
    @if(Auth::check())
      <li>
        {!! link_to_route('logout', 'Logout') !!}
      </li>
    @else
      <li>
        {!! link_to_route('login', 'Login') !!}
      </li>    
    @endif
     <li>
        {!! link_to_route('users.create', 'New User') !!}
      </li>

     <li>
        {!! link_to_route('weeks.create', 'Add Week') !!}
      </li>

     <li>
        {!! link_to_route('chains.create', 'Add Chain') !!}
      </li>

      <li>
        {!! link_to_route('stores.create', 'Add Store') !!}
      </li>

      <li>
        {!! link_to_route('jobs.create', 'Add Job') !!}
      </li>

    </ul>
  </div>
  @yield('content')

  </body>
</html>
</html>
