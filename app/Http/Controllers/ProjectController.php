<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function viewProject()
    {
        $projectViews = Project::all();
        return view('viewProject', ['projectViews' => $projectViews]);
    }

    public function viewProjectDetails($id)
    {
        $projectViewsDetails = Project::find($id);
        return view('viewProjectDetails', ['projectViewsDetails' => $projectViewsDetails]);
    }

    public function beforeCreateProject()
    {
        return view('createProject');
    }

    public function createProject(Request $request)
    {
        $projectCreation = Project::create([
            'nameProject' => $request->nameProjectFromInput,
            'contentProject' => $request->contentProjectFromInput,
            'authorProject' => $request->authorProjectFromInput
        ]);
        return redirect('/viewProjectDetails/' . $projectCreation->id);
    }

    public function editProject($id)
    {
        $projectEdits = Project::find($id);
        return view('editProject', compact('projectEdits'));
    }

    public function updateProject(Request $request, $id)
    {
        $projectUpdates = Project::find($id);
        $projectUpdates->update([
            'nameProject' => $request->nameProjectFromInput,
            'contentProject' => $request->contentProjectFromInput,
            'authorProject' => $request->authorProjectFromInput
        ]);
        return redirect('/viewProjectDetails/' . $projectUpdates->id);//redirect / retourne view - viewproject du détail
    }

    /*public function delete(){

    }*/
}