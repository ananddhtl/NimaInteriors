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
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog-single', function () {
    return view('frontend.blog-single');
});
Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/contactus', function () {
    return view('frontend.contact');
});


Route::post('contactusform', [ContactUsController::class, 'store'])->name('contactform');

Route::get('diensten', [FrontendController::class, 'project'])->name('projectlist');

Route::get('dienstendesc/{id}', [FrontendController::class, 'projectdesc'])->name('projectdesc');

