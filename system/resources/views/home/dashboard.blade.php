@extends('layout.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			@if (Auth::check())
				
				<h1>Welcome {{ Auth::user()->name }} !</h1>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
					@foreach($user as $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>


			@endif
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
@endsection