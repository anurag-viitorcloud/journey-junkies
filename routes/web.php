<?php

use App\Http\Controllers\BlogController;
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

Route::get('/create-blog', [App\Http\Controllers\openAIController::class, 'createContent'])->name('create-blog');
Route::post('/getImageData', [App\Http\Controllers\ImageController::class, 'getImageData'])->name('getImageData');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/convert', [App\Http\Controllers\HtmlToXMLController::class, 'converToXML'])->name('convert');

Route::get('/convertData', function () {
    return view('convert');
})->name('convertData');

Route::post('/getImageData', [App\Http\Controllers\ImageController::class, 'getImageData'])->name('getImageData');

Route::get('/social-media', function () {

    return view('socialMedia.create');

})->name('social-media');
// Route::resource('/blogs',BlogController::class);
// Route::resource('/dashboards',BlogController::class);

// Route::view('/blog-create','blog.create');

// Route::view('/blog-index','blog.index');
// Route::view('/blog-edit','blog.edit');

// Route::view('/dashboard','dashboard.index');



