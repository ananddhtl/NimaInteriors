
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImagesController;
use App\Http\Controllers\BlogController;


Route::get('/admindashboard', function () {
    return view('backend.dashboard');
});


Route::group(["prefix" => "admin", "as" => "admin."], function () {

    Route::get('contactusdata', [ContactUsController::class, 'index'])->name('contactusdata');


    Route::get('addproject', [ProjectController::class, 'addproject'])->name('addproject');
    Route::get('listproject', [ProjectController::class, 'index'])->name('listproject');

    Route::post('storeproject', [ProjectController::class, 'store'])->name('storeproject');


    Route::get('addprojectimages', [ProjectImagesController::class, 'addprojectimages'])->name('addprojectimages');
    Route::get('listprojectimages', [ProjectImagesController::class, 'index'])->name('listprojectimages');

    Route::post('storeprojectimages', [ProjectImagesController::class, 'store'])->name('storeprojectimages');

    Route::get('addblog', [BlogController::class, 'addblog'])->name('addblog');
    Route::get('listblog', [BlogController::class, 'index'])->name('listblog');

    Route::post('storeblog', [BlogController::class, 'store'])->name('storeblog');

});
