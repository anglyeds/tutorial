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
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
					@foreach($client as $value)
						<tr>
							<td>{{ $value->client }}</td>
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