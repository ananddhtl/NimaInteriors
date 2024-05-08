<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::get();
        return view('backend.blog.list', compact('data'));
        
    }

    public function addblog()
    {
        return view('backend.blog.add');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);
    
     
        $blog = new Blog();
        $blog->title = $validatedData['title'];
    
        
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $filename = time().'.'.$thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('admin/blog'), $filename);
            $blog->image = $filename; 
        }
    
        $blog->description = $request->input('description');
        $blog->save();
        return redirect()->route('admin.listblog')->with('success', 'Blog post created successfully!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
