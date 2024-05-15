<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NormalUserController;

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



Route::prefix('customer')->group(function () {

    Route::get('/login', function () {
        return view('frontend.customer.login');
    });
    Route::get('/register', function () {
        return view('frontend.customer.register');
    });
    Route::get('/forgetpassword', function () {
        return view('frontend.customer.forgetpassword');
    })->name('forgetpassword');

    Route::get('/changepassword', function () {
        return view('frontend.customer.changepasword');
    })->name('customer.changepassword');
    Route::post('login', [NormalUserController::class, 'login'])->name('login');
    Route::post('storenormaluser', [NormalUserController::class, 'store'])->name('normaluserdata');
    Route::get('dashboard', [NormalUserController::class, 'index'])->name('dashboard');
    Route::post('/logout', [NormalUserController::class, 'logout'])->name('logout');
    Route::post('/forgot-password', [NormalUserController::class, 'forgotPassword'])->name('forgot.password');
    Route::post('/change-password', [NormalUserController::class, 'changePassword'])->name('change.password');


});


Route::post('contactusform', [ContactUsController::class, 'store'])->name('contactform');

Route::get('diensten', [FrontendController::class, 'project'])->name('projectlist');

Route::get('blog', [FrontendController::class, 'blog'])->name('bloglist');

Route::get('blog-single/{id}', [FrontendController::class, 'blogsingledesc'])->name('blogsinglelist');

Route::get('dienstendesc/{id}', [FrontendController::class, 'projectdesc'])->name('projectdesc');

Route::get('algemene-voorwaarden', [FrontendController::class, 'generaltermandcondition'])->name('generaltermandcondition');

Route::get('privacy', [FrontendController::class, 'privacy'])->name('privacy');


Route::middleware(['auth:web'])->group(function () {


});