<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Blog;
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

    public function blog(){
        $bloglist = Blog::get();
     
        return view('frontend.blog', compact('bloglist'));
    }


    public function blogsingledesc($id){
        $blog = Blog::findOrfail($id);
     
        return view('frontend.blog-single', compact('blog'));
    }
    
}
