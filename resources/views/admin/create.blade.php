@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
				@if (session('successMsg'))
				<div class="alert alert-success" role="alert">
					{{ session('successMsg') }}
				</div>
				@endif
				
				@if ($errors->any())
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger" role="alert">
						{{ $error }}
					</div>
					@endforeach
				@endif
                <div class="card-header">Add Student Data</div>
                <div class="card-body">
                    <!-- Default form register -->
					<form class="text-center border border-light p-5" action="{{ route('save_student') }}" method="POST">
						{{ csrf_field() }}
						<!-- First name -->
						<input type="text" id="defaultRegisterFormFirstName" name="firstname" class="form-control mb-4" placeholder="First Name">
						
						<!-- Last name -->
						<input type="text" id="defaultRegisterFormLastName" name="lastname" class="form-control mb-4" placeholder="Last Name">
						
						<!-- E-mail -->
						<input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-Mail">
						
						<!-- Mobile number -->
						<input type="text" id="defaultRegisterPhonePassword" name="mobile" class="form-control" placeholder="Mobile Number" aria-describedby="defaultRegisterFormPhoneHelpBlock" maxlength="10">
						
						<!-- Save button -->
						<button class="btn btn-info my-4 btn-block" type="submit">Save Data</button>
					</form>
					<!-- Default form register -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
