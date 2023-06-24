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
    return view('welcome');
});

Auth::routes();

Route::get('/blog', function () {
    return view('blog.create');
})->name('blog');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/convert', [App\Http\Controllers\HtmlToXMLController::class, 'converToXML'])->name('convert');

Route::get('/convertData', function () {
    return view('convert');
})->name('convertData');

Route::post('/getImageData', [App\Http\Controllers\ImageController::class, 'getImageData'])->name('getImageData');
