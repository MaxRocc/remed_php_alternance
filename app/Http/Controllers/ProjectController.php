<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function viewProject(){/////////////////////////////méthode index
        $projectViews = Project::all();
        return view('viewProject', ['projectViews'=>$projectViews]);
    }

    public function viewProjectDetails($id){
        $projectViewsDetails = Project::find($id);
        return view('viewProjectDetails', ['projectViewsDetails'=>$projectViewsDetails]);
    }

    public function createProject(array $input){
        return Project::create([
            'nameProject' => $input['nameProject'],
            'contentProject' => $input['contentProject'],
            'authorProject' => $input['authorProject'],
        ]);
    }

    public function updateProject(Request $request, $id){
        $projectUpdates=Project::find($id);
        $projectUpdates->fill([
            'nameProject'=>$request->nameProjectFromInput,
            'contentProject'=>$request->contentProjectFromInput,
            'authorProject'=>$request->authorProjectFromInput
            ]);
        return redirect('/viewProjectDetail');//redirect / retourne view - viewproject du détail
    }
}

