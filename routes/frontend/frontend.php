<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontendController;
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});



Route::get('/project-single', function () {
    return view('frontend.project-single');
});


Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/contactus', function () {
    return view('frontend.contact');
});


Route::post('contactusform', [ContactUsController::class, 'store'])->name('contactform');

Route::get('diensten', [FrontendController::class, 'project'])->name('projectlist');

Route::get('blog', [FrontendController::class, 'blog'])->name('bloglist');

Route::get('blog-single/{id}', [FrontendController::class, 'blogsingledesc'])->name('blogsinglelist');

Route::get('dienstendesc/{id}', [FrontendController::class, 'projectdesc'])->name('projectdesc');

Route::get('algemene-voorwaarden', [FrontendController::class, 'generaltermandcondition'])->name('generaltermandcondition');


Route::get('privacy', [FrontendController::class, 'privacy'])->name('privacy');
