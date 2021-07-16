@extends('layouts.app')
@section('content')

<div class="container">
	@if($errors->any())
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error }}
		</div>
		@endforeach
	@endif
	
	<!-- Default form register -->
	<form class="text-center border border-light p-5" action="{{ route('update_student', $student->id) }}" method="POST">
		{{ csrf_field() }}
		<p class="h4 mb-4">Edit Student Data</p>
		
		<!-- First name -->
		<input type="text" id="default_first_name" name="firstname" class="form-control mb-4" value="{{$student->first_name}}" placeholder="First Name">
		
		<!-- Last name -->
		<input type="text" id="default_last_name" name="lastname" class="form-control mb-4" value="{{$student->last_name}}" placeholder="Last Name">
		
		<!-- E-mail -->
		<input type="email" id="default_email" name="email" class="form-control mb-4" value="{{$student->email_id}}" placeholder="E-MailID">

		<!-- Mobile number -->
		<input type="text" id="default_mobile" name="mobile" class="form-control mb-4" value="{{$student->mobile_no}}" placeholder="Mobile Number" maxlength="10">

		<!-- Submit button -->
		<button class="btn btn-info my-4 btn-block" type="submit">Update Data</button>
	</form>
	<!-- Default form register -->
</div>

@endsection