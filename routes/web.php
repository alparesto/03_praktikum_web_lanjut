<?php

use App\Http\Controllers\AboutUsContoller;
use App\Http\Controllers\ContactUsContoller;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


// Praktikum 1
Route::get('/', function () {
    return view('praktikum-1.home');
});

Route::get('/product', function () {
    return view('praktikum-1.products');
});

Route::prefix('product')->group(function () {
    Route::get('/games/{name}', function ($name) {
        return view('praktikum-1.product', ['name' => $name, 'category' => 'Game']);
    });
    Route::get('/films/{name}', function ($name) {
        return view('praktikum-1.product', ['name' => $name, 'category' => 'Film']);
    });
});

Route::get('/news', function () {
    return view('praktikum-1.news');
});

Route::get('/news/{judul}', function ($judul) {
    return view('praktikum-1.new', ['judul' => $judul]);
});

Route::get('/program', function () {
    return view('praktikum-1.program');
});

Route::prefix('program')->group(function () {
    Route::get('/bootcamp/{name}', function ($name) {
        return "Program $name";
    });
    Route::get('/materi/{name}', function ($name) {
        return "Materi $name";
    });
});

Route::get('/about-us', function () {
    return view('praktikum-1.about-us');
});

Route::resource('/contact-us', ContactUsContoller::class);

// Praktikum 2
// Route::get('/', function () {
//     return view('praktikum-2.dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('praktikum-2.dashboard');
// });

// Route::get('/profile', function () {
//     return view('praktikum-2.profile');
// });

// Route::get('/pengalaman-kuliah', function () {
//     return view('praktikum-2.curhat-kuliah');
// });