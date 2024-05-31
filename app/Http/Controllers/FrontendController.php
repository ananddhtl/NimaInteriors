<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Blog;
use App\Models\TermandCondition;
use App\Models\PrivacyDeclaration;
use App\Models\InventorySettings;
use App\Models\ItemGroup;
use App\Models\ItemSubGroup;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function generaltermandcondition(){
      
       $data = TermandCondition::get();
        return view('frontend.termandcondition', compact('data'));
    }

    public function privacy(){
      
        $data = PrivacyDeclaration::get();
        return view('frontend.privacy', compact('data'));
    }

    public function languageSwitch(Request $request){
      
       $language = $request->input('language');
       session(['language', $language]);
       return redirect()->back()->with(['language_switched' => $language]);
    }

    public function dashboard(){
      
        
        return view('frontend.customer.account.index');
    }
    public function getproducts() {
      
        $itemsdetails = InventorySettings::with('inventorysettingdetails')
                        ->orderBy('id', 'asc')
                        ->where('status', '0')
                        ->paginate(10);
        $category = ItemGroup::all();
        $subcategory = ItemSubGroup::all();
        $brand = Brand::all();
        return view('frontend.shopping.gridshop', compact('itemsdetails','category','subcategory','brand'));
    }
    

    public function updateprofile(){
      
        
        return view('frontend.customer.account.profilesetting');
    }

    public function password(){
      
        
        return view('frontend.customer.account.password');
    }
    
    
    public function update(Request $request)
    {
     
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

       
        $user = Auth::user();
        $user->fullname = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

      
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
       
        $request->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required|string|min:8|confirmed',
        ]);
        if (!Hash::check($request->input('currentpassword'), Auth::user()->password)) {
            return redirect()->back()->withErrors(['currentpassword' => 'The current password is incorrect.']);
        }

      
        $user = Auth::user();
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();

       
        return redirect()->back()->with('success', 'Password updated successfully.');
    }


    
}
