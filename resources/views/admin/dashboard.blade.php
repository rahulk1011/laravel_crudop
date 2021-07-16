@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in as <b>{{ Auth::user()->name }}</b> !!</p>
					
					<p>ID: <b>{{ Auth::user()->id }}</b></p>
					
					<p>Username: <b>{{ Auth::user()->username }}</b></p>
					
					<p>E-Mail: <b>{{ Auth::user()->email }}</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
