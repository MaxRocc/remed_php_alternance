<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function viewProject(){
        $projectViews = Project::all();
        return view('viewProject', ['projectViews'=>$projectViews]);
    }

    public function updateProject(){
        $projectUpdate = Project::updateOrInsert();
        return "toto";
    }
}

