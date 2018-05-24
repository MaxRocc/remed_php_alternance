@extends('layouts.app')
@section('viewAllProjects')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View TOUS les projectS de TOUT le monde</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($projectViews as $projectView)
                            <h1>View Projet "{{ $projectView->nameProject }}"</h1><br>
                            <p>Content : {{ $projectView->contentProject }}</p><br>
                            <p>Auteur : {{ $projectView->user_id }}</p><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection