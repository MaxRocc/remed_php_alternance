@extends('layouts.app')
@section('updateProject')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update project</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{--{{ session('status') }}--}}
                            </div>
                        @endif
                        <h1>Update tes projects</h1><br>
                        <div>
                            @foreach ($projectUpdates as $projectUpdate)
                                <a href="/updateProject">Titre :<b>{{ $projectUpdates->nameProject }}</b></a><br>
                                <div>Contenu : {{ $projectUpdates->contentProject }}</div><br>
                                <div><b>Auteur : </b>{{ $projectUpdates->authorProject }}</div><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
