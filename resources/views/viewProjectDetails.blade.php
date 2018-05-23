@extends('layouts.app')
@section('viewProjectDetails')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View les détails du project</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{--{{ session('status') }}--}}
                    </div>
                    @endif
                    <h1>View Project "{{ $projectViewsDetails->nameProject }}"</h1><br>
                    <p>{{ $projectViewsDetails->contentProject }}</p><br>
                    <p>Auteur : {{ $projectViewsDetails->authorProject }}</p><br>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection