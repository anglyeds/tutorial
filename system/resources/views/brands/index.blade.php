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
							<th>Client</th>
							<th>Brand</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
					@foreach($brand as $value)
						<tr>
							<td>{{ $value->client->name }}</td>
							<td>{{ $value->name }}</td>
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