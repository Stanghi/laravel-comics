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

Route::get('/', function () {
    $comics = config('comics.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/character', function () {
    return view('character');
})->name('character');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/comicsInfo', function () {
    return view('comicsInfo');
})->name('comicsInfo');




// paramtro dinamico nella rotta:
// aggiungere /{mia_var} e passarla con lo stesso nome alla funzione $mia_var
Route::get('/comicsInfo/{id}', function ($id) {

    $comics = config('comics.comics');
    $comic_get = array_filter($comics, fn ($item) => $item['id'] == $id);
    $comic = $comic_get[array_key_first($comic_get)];

    //dd($comic);

    return view('comicsInfo', compact('comic'));
})->name('comicsInfo');
