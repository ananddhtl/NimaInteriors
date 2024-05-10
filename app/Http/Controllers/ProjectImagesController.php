<?php

namespace App\Http\Controllers;

use App\Models\ProjectImages;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectsWithImages = Project::with('images')->get();
        return view('backend.projectimages.list', compact('projectsWithImages'));
    }
    public function addprojectimages()
    {
        $projectlist = Project::all();
        return view('backend.projectimages.add', compact('projectlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

       
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('admin/projectimages'), $filename); 

           
            $projectImage = new ProjectImages();
            $projectImage->project_id = $validatedData['project_id'];
            $projectImage->images = 'admin/projectimages/' . $filename;
            $projectImage->save();
        }

       
        return redirect()->route('admin.listprojectimages')->with('success', 'Project Images stored successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(ProjectImages $projectImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectImages $projectImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectImages $projectImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectImages $projectImages)
    {
        //
    }
}
