@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">Student Records</div>
				<div class="card-body">
					<table class="table">
						<thead class="black white-text">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Email-ID</th>
								<th scope="col">Mobile</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($students as $student)
							<tr>
								<th scope="row">{{ $student->id }}</th>
								<td>{{ $student->first_name }}</td>
								<td>{{ $student->last_name }}</td>
								<td>{{ $student->email_id }}</td>
								<td>{{ $student->mobile_no }}</td>
								<td>Edit | Delete</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection