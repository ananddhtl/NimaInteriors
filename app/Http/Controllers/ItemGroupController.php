<?php

namespace App\Http\Controllers;

use App\Models\ItemGroup;
use Illuminate\Http\Request;

class ItemGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ItemGroup::orderBy("id", "desc")->where('status', '0')->take(10)->get();
        return view('backend.inventory.itemgroup', compact('data'));
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
    public function  store(Request $request)
    {
        if ($request->group_idEdit) {
            $group = ItemGroup::find($request->group_idEdit);
            $group->groupName = $request->groupName;
            $group->update();
            return redirect()->route('admin.itemgroup')->with('success', 'Project created successfully!');
        } else {
            $request->validate(['groupName' => 'required|unique:item_groups']);
            $group = new ItemGroup();
            $group->groupName = $request->groupName;
            $group->save();
            $groupitems = ItemGroup::orderBy("id", "desc")->take(10)->where('status', '0')->get();

            return redirect()->back()->with('sucess', 'Group Item added successfully');
           
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemGroup $itemGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = ItemGroup::orderBy("id", "desc")->where('status', '0')->take(10)->get();
        $group = ItemGroup::FindorFail($id);
        return view('backend.inventory.itemgroup', compact('group', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemGroup $itemGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = ItemGroup::find($id);
        $group->status = 1;
        $group->update();
        return back()->with('Group_delete', 'Group Item delete is delete successfully');
    }

    public function SearchGroup(Request $request)
    {

        if ($request->ajax()) {
            $search = $request->get('query');
            if ($search != '') {
                $groupitems = ItemGroup::where('groupName', 'LIKE', '' . $search . '%')->where('status', '0')->take(10)->get();
            }
        }
        return json_encode($groupitems);

    }
}
