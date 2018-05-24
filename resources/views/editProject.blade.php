@extends('layouts.app')
@section('updateProject')
     <div class="container">
         <div class="row">
             <form class="form-group-lg" method="POST" action="{{route('update',$projectEdits->id)}}">
                 {{ method_field('PUT') }}
                 {{ csrf_field() }}

                 <label for="nom">Titre</label>
                 <input class="form-control" name="nameProjectFromInput" type="text" value="{{ $projectEdits->nameProject }}">
                 <label for="prix">Content</label>
                 <input class="form-control" name="contentProjectFromInput" type="text" value="{{ $projectEdits->contentProject }}">
                 <label for="code">Auteur</label>
                 <input class="form-control" name="authorProjectFromInput" value="{{ $projectEdits->user_id }}">
                 <button class="btn" type="submit">Enfoncez bruyamment vos choses dans la DB</button>
             </form>
         </div>
    </div>
@endsection
