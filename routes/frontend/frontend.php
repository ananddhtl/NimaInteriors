<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

// this is the route for project page
Route::get('/diensten', function () {
    return view('frontend.project');
})->name('project');

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

Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::post('contactusform', [ContactUsController::class, 'store'])->name('contactform');