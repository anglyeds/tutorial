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
							<th>Week</th>
							<th>Start Date</th>
							<th>End Date</th>
						</tr>
					</thead>
					<tbody>
					@foreach($week as $value)
						<tr>
							<td>{{ $value->week }}</td>
							<td>{{ $value->date_start }}</td>
							<td>{{ $value->date_end }}</td>
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