@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="account-summary">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome {{Auth::User()->name}}.</p>
                    <p>Today is {{ date("l F d, Y") }}.</p>
                    <h4>Accounts<h4>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
