@extends('layout.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Chain</th>
							<th>Store Code</th>
							<th>Store Name</th>
							<th>Address</th>
							<th>Display Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
					@foreach($store as $value)
						<tr>
							<td>{{ $value->chain->name }}</td>
							<td>{{ $value->code }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->address }}</td>
							<td>{{ $value->display_name }}</td>
							<td>{{ $value->description }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
@endsection