@extends('layout.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Display Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
					@foreach($chain as $value)
						<tr>
							<td>{{ $value->name }}</td>
							<td>{{ $value->display_name }}</td>
							<td>{{ $value->description }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
@endsection