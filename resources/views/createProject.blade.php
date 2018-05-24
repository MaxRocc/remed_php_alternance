@extends('layouts.app')
@section('createProject')
    <div class="container">
        <div class="row">
            <form class="form-group-lg" method="POST" action="{{route('create')}}">
                {{ csrf_field() }}

                <label for="nom">Titre</label>
                <input class="form-control" name="nameProjectFromInput" type="text" value="">
                <label for="prix">Content</label>
                <input class="form-control" name="contentProjectFromInput" type="text" value="">
                <label for="code">Auteur</label>
                <input class="form-control" name="user_id" value=""><br>
                <button class="btn" type="submit">Insérez (délicatement) vos grosses données dans la DB</button>
            </form>
        </div>
    </div>
@endsection
