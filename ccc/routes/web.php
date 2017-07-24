<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// scieżki  bez kontrolera , podstrony: przysięga dojo, historia karate, filozofia karate, wymagania dorosli, wymagania dzieci, kontakt

Route::get('/', function () {
    return view('layouts/index');
})->name('homepage');

Route::get('filozofia-karate', function () {
    return view('layouts/filozofia-karate');
})->name('filozofia-karate');

Route::get('wymagania-dorosli', function () {
    return view('layouts/wymagania-dorosli');
})->name('wymagania-dorosli');

Route::get('wymagania-dzieci', function () {
    return view('layouts/wymagania-dzieci');
})->name('wymagania-dzieci');

// Route::get('kontakt', function () {
//     return view('layouts/kontakt');
// })->name('kontakt');

Route::get('/contact', 'PagesController@create');
Route::post('/contact', 'PagesController@store');

// Route::post('kontakt', function () {
//     return view('layouts/kontakt');
// })->name('kontakt');

Route::get('gallery', function () {
    return view('layouts/gallery');
})->name('gallery');

Route::get('kumite', function () {
    return view('layouts/kumite/kumite');
})->name('kumite');

// Route::get('kolepka', function () {
//     return view('layouts/kolepka');
// })->name('Kolebka dalekowschodnich systemów walki');


Route::get('/films', 'FilmsController@index');
Route::get('/films/movie-details/{id}', 'FilmsController@showMovieDetails');
Route::get('/films/score-details/{id}', 'FilmsController@showScoreDetails');
Route::post('/films/score-details/{id}', 'FilmsController@storeComment');

Route::get('/materialy-szkoleniowe', 'MaterialsController@create');
Route::post('/materialy-szkoleniowe', 'MaterialsController@store');

// Podstrona Kyokushin/ Dlaczego warto trenować

Route::get('index3', function () {
    return view('Whytranings/index3');
})->name('index3');

Route::get('/whytranings', 'WhytraningsController@index3');

//  Podstrona Twoje Osiągnięcia  ( posiada formularz Create - do ddoawania nowych filmów , brak przycisku ze strony do formularza)

Route::get('index4', function () {
    return view('Scores/index4');
})->name('index4');

Route::post('/scores', 'ScoresController@store');
Route::get('/scores', 'ScoresController@index4');
Route::get('/scores/create', 'ScoresController@create');
Route::get('/scores/{id}', 'ScoresController@show');

Route::get('/slownictwo', function () {
    return view('train-yourself/vocabulary');
})->name('');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::any('{catchall}', function ($page) {
    return view('layouts/' . $page);
})->where('catchall', '(.*)');