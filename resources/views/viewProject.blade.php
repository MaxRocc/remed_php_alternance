@extends('layouts.app')
@section('viewProject')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dache-borde</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Visualize tes projects </h1><br>
                            <div>
                                @foreach ($projectViews as $projectView)
                                    <a href="/viewProjectDetails/{{ $projectView->id }}">Titre :<b>{{ $projectView->nameProject }}</b></a><br>
                                    <div>Contenu : {{ $projectView->contentProject }}</div><br>
                                    <div><b>Auteur : </b>{{ $projectView->authorProject }}</div><br>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
