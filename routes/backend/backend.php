
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TermandConditionController;
use App\Http\Controllers\PrivacyDeclarationController;


Route::get('/admindashboard', function () {
    return view('backend.dashboard');
});


Route::group(["prefix" => "admin", "as" => "admin."], function () {

    Route::get('contactusdata', [ContactUsController::class, 'index'])->name('contactusdata');


    Route::get('addproject', [ProjectController::class, 'addproject'])->name('addproject');
    Route::get('listproject', [ProjectController::class, 'index'])->name('listproject');
    Route::get('editproject/{id}', [ProjectController::class, 'edit'])->name('editproject');

    Route::post('storeproject', [ProjectController::class, 'store'])->name('storeproject');


    Route::get('addprojectimages', [ProjectImagesController::class, 'addprojectimages'])->name('addprojectimages');
    Route::get('listprojectimages', [ProjectImagesController::class, 'index'])->name('listprojectimages');

    Route::post('storeprojectimages', [ProjectImagesController::class, 'store'])->name('storeprojectimages');

    Route::get('addblog', [BlogController::class, 'addblog'])->name('addblog');
    Route::get('listblog', [BlogController::class, 'index'])->name('listblog');
    Route::get('editblog/{id}', [BlogController::class, 'edit'])->name('editblog');
    Route::post('updateblog/{id}', [BlogController::class, 'update'])->name('updateblog');
    Route::post('storeblog', [BlogController::class, 'store'])->name('storeblog');

    Route::get('termandcondition', [TermandConditionController::class, 'index'])->name('listtermandcondition');
    Route::get('edittermandcondition/{id}', [TermandConditionController::class, 'edit'])->name('edittermandcondition');
    Route::post('storetermandcondition', [TermandConditionController::class, 'store'])->name('storetermandcondition');
    Route::post('updatetermandcondition/{id}', [TermandConditionController::class, 'update'])->name('updatetermandcondition');

    Route::get('privacydeclaraion', [PrivacyDeclarationController::class, 'index'])->name('listprivacydeclaration');
    Route::post('storeprivacydeclaration', [PrivacyDeclarationController::class, 'store'])->name('storeprivacydeclaration');
    Route::get('editprivacydeclaration/{id}', [PrivacyDeclarationController::class, 'edit'])->name('editprojectdeclaration');
});
