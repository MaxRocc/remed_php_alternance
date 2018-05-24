<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function viewProject()
    {
        $projectViews = Project::all();
        $user = Auth::user();
        return view('viewProject', compact('projectViews', 'user'));
    }

    public function viewAllProjects()
    {
        $projectViews = Project::all();
        return view('viewAllProjects', compact('projectViews'));
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
            'user_id' => Auth::id()
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
}