@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <!-- Profile -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <profile-component></profile-component>
        </div>
    </div>
    <!-- Profile End -->

</div>
@endsection
