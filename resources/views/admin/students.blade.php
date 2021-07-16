@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
				@if (session('successMsg'))
				<div class="alert alert-success" role="alert">
					{{ session('successMsg') }}
				</div>
				@endif
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
								<td>
									<a class="btn btn-primary btn-sm" href="{{ route('edit_student', $student->id) }}"><i class="fas fa-edit" aria-hidden="true"></i></a>&nbsp;&nbsp;
									<form method="POST" id="delete-form-{{$student->id}}" action="{{ route('delete_student', $student->id) }}" style="display:none;">
										{{ csrf_field() }}
										{{ method_field('delete') }}
									</form>
									<button onclick="if(confirm('Are you sure to delete this entry?')){
										event.preventDefault();
										document.getElementById('delete-form-{{$student->id}}').submit();
									}else{
										event.preventDefault();
									}" class="btn btn-danger btn-sm" href="{{ route('delete_student', $student->id) }}"><i class="fa fa-trash" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $students->links() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection