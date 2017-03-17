@extends('layout.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			@if (Auth::check())
				
				<h1>Welcome {{ Auth::user()->name }} !</h1>

			@endif
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
@endsection