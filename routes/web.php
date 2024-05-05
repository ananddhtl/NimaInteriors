<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.homepage');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/project', function () {
    return view('frontend.project');
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


require __DIR__ . '/backend/backend.php';