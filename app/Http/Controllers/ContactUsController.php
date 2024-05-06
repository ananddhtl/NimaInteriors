<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       
        $contactus = new ContactUs();
    
        $contactus->fname = $request->input('fname');
        $contactus->lname = $request->input('lname');
        $contactus->phonenumber = $request->input('phonenumber');
        $contactus->email = $request->input('email');
        $contactus->streetno = $request->input('streetnumber');
        $contactus->postcodeandcity = $request->input('pcodeandc');
        $contactus->iam = $request->input('iam');
        $contactus->project = $request->input('project');
        $contactus->message = $request->input('message');
    
        $contactus->save();
    
        $data = $request->all();
        $data['emailMessage'] = $data['message'];
        unset($data['message']);
        Mail::send('frontend.emailtemplate.contactus', $data, function ($message) use ($data) {
            $message->to('queswin.tech@gmail.com');
            $message->subject('You have received a message from the contact us section');
            $message->from($data['email']);
        });
    
        return redirect()->back()->with('message', 'Data has been sent successfully');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
