@extends('layouts.app')
@section('viewAccount')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome à you, {{$accountView->firstName}}</h1>

                    <p>Your prénom : {{$accountView->firstName}}</p>
                    <p>Your nom : {{$accountView->lastName}}</p>
                </div>
            </div>
            <br><a href="">View your account details</a><br><br>

        </div>
    </div>
</div>
@endsection