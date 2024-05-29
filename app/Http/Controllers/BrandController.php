<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $data=Brand::orderBy("id","desc")->where('status','0')->take(10)->get();
       return view('backend.inventory.brand',compact('data'));
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
       
        if($request->id)
        { 
            $request->validate([
                'companyName' => 'required',
                'address' => 'required',
                'contactNumber' => 'required',
              ]);
            $company=Brand::find($request->id);                
            $company->companyName=$request->companyName; 
            $company->address =$request->address;      
            $company->contactNumber =$request->contactNumber;  
            $company->update();
            $companies = Brand::orderBy("id","desc")->take(10)->get();
          
            return redirect()->back()->with('company_updated','Company updated is successfully updated'); 
        }
        else{
    
        $request->validate([
            'companyName' => 'required|unique:brands',
            'address' => 'required|',
            'contactNumber' => 'required|unique:brands',
          ]);
        $companies = Brand::orderBy("id","desc")->where('status','0')->take(10)->get();
        $company = new Brand();
        $company->companyName =$request->companyName; 
        $company->address =$request->address;      
        $company->contactNumber =$request->contactNumber; 
        $company->status =0;           
        $company->save();
        //return view('Company.add-company',compact('companies'))->with('company_added','Company  added successfully');   
      
        return redirect()->back()->with('company_added','Company  added successfully');     
      
      }   
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, $id)
    {
        $data = Brand::orderBy("id","desc")->where('status','0')->take(10)->get();
        $editbrand=Brand::FindorFail($id);
        return view('backend.inventory.brand',compact('data','editbrand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, $id)
    {
        $company=Brand::findorfail($id);  
        $company->status=1;    
        $company->update();
        return back()->with('message','Brand is delete successfully');
    }
}
