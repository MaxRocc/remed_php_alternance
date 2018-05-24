@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard-L</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Tu es logged in !
                </div>
            </div>
            <br><a href="/viewAccount">View your account details</a><br><br>
            <a href="/viewProject" class="btn" type="submit">View tous vos Projekten</a>
        </div>
    </div>
</div>
@endsection
