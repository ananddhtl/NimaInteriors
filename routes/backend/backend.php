
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TermandConditionController;
use App\Http\Controllers\PrivacyDeclarationController;
use App\Http\Controllers\AdminController;


Route::get('admin/login', [AdminController::class, 'showloginform'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('adminlogin');

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {

    Route::get('/admindashboard', function () {
        return view('backend.dashboard');
    });
    Route::get('contactusdata', [ContactUsController::class, 'index'])->name('admin.contactusdata');
    Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('addproject', [ProjectController::class, 'addproject'])->name('admin.addproject');
    Route::get('listproject', [ProjectController::class, 'index'])->name('admin.listproject');
    Route::get('editproject/{id}', [ProjectController::class, 'edit'])->name('admin.editproject');
    Route::post('storeproject', [ProjectController::class, 'store'])->name('admin.storeproject');

    Route::get('addprojectimages', [ProjectImagesController::class, 'addprojectimages'])->name('admin.addprojectimages');
    Route::get('listprojectimages', [ProjectImagesController::class, 'index'])->name('admin.listprojectimages');
    Route::post('storeprojectimages', [ProjectImagesController::class, 'store'])->name('admin.storeprojectimages');

    Route::get('addblog', [BlogController::class, 'addblog'])->name('admin.addblog');
    Route::get('listblog', [BlogController::class, 'index'])->name('admin.listblog');
    Route::get('editblog/{id}', [BlogController::class, 'edit'])->name('admin.editblog');
    Route::post('updateblog/{id}', [BlogController::class, 'update'])->name('admin.updateblog');
    Route::post('storeblog', [BlogController::class, 'store'])->name('admin.storeblog');

    Route::get('termandcondition', [TermandConditionController::class, 'index'])->name('admin.listtermandcondition');
    Route::get('edittermandcondition/{id}', [TermandConditionController::class, 'edit'])->name('admin.edittermandcondition');
    Route::post('storetermandcondition', [TermandConditionController::class, 'store'])->name('admin.storetermandcondition');
    Route::post('updatetermandcondition/{id}', [TermandConditionController::class, 'update'])->name('admin.updatetermandcondition');

    Route::get('privacydeclaraion', [PrivacyDeclarationController::class, 'index'])->name('admin.listprivacydeclaration');
    Route::post('storeprivacydeclaration', [PrivacyDeclarationController::class, 'store'])->name('admin.storeprivacydeclaration');
    Route::get('editprivacydeclaration/{id}', [PrivacyDeclarationController::class, 'edit'])->name('admin.editprivacydeclaration');
    Route::post('updateprivacydeclaration/{id}', [PrivacyDeclarationController::class, 'update'])->name('admin.updateprivacydeclaration');
});




Route::middleware(['auth:web'])->group(function () {


});