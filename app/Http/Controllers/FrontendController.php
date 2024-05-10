<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function project(){
        $projectlist = Project::get();
     
        return view('frontend.project', compact('projectlist'));
    }

    public function projectdesc($id){
        $project = Project::with('images')->findOrFail($id);
        return view('frontend.project-single', compact('project'));
    }
    
}
