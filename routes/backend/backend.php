
<?php

use Illuminate\Support\Facades\Route;


Route::get('/admindashboard', function () {
    return view('backend.dashboard');
});
