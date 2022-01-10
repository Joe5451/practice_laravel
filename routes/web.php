<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\LineBotController;

// 在 heroku 路徑會變成 http，透過以下設定強制設為 https
// URL::forceScheme('https');

Route::get('/line', [LineBotController::class, 'index'])->name('line');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news_content', function () {
    return view('news_content');
})->name('news_content');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


