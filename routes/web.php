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
    return view('rencontreImmo.accueil.accueil');
});

Route::get('/mesPub', 'immoController@getPub')->name('mesPub');

Route::get('/accueil', function () {
    return view('rencontreImmo.accueil.accueil');
})->name('accueil');

Route::get('/conditions', function () {
    return view('rencontreImmo.notification-message.condition');
})->name('conditions');

Route::get('/contact', function () {
    return view('rencontreImmo.notification-message.contact');
})->name('contact');

Route::get('/admin/{type}', 'immoController@getMessage')->name('admin');
Route::get('/comptabilite', 'immoController@getCompta')->name('comptabilite');

Route::get('/letters', function () {
    return view('rencontreImmo.letters.details');
})->name('letters');

Route::get('/form-vente', function () {
    return view('rencontreImmo.formulaire.vendreImmo');
});


Route::get('/register-tech', function () {
    return view('rencontreImmo.formulaire.register_tech');
});

Route::post('/user-add-immo', 'immoController@registerImmo')->name('addImmo');
Route::post('/update-immo', 'immoController@updateImmo')->name('addImmom');

Route::post('/user-add-tech', 'immoController@registerTech')->name('addtech');

Route::get('/buy-immo', 'immoController@getBuyImmo')->name('buyImmo');
Route::get('/techni-immo', 'immoController@getTech')->name('tech');
Route::post('/send-message', 'immoController@sendMessage')->name('message');
Route::post('/login', 'immoController@login')->name('login');

// Route::get('/buy-immo', 'immoController@getBuyImmo')->name('buyImmo');
Route::get('/rent-immo', 'immoController@getRentImmo')->name('rentImmo');
Route::get('/search', 'immoController@searchTech')->name('search');
Route::get('/searchL', 'immoController@search1LImmo')->name('searchL');
Route::get('/searchI', 'immoController@search1BuyImmo')->name('searchI');
// Route::get('/search1', 'immoController@search1BuyImmo')->name('search1');
Route::get('immo-détails/{id}','immoController@getImmoById')->name('immo-détails');
Route::get('immo-modif/{id}','immoController@getImmoByIdm')->name('immo-modif');
Route::get('immo-modift/{id}','immoController@getImmoByIdmt')->name('immo-modift');

Route::get('immo-détails1/{id}','immoController@getImmo1ById')->name('immo-détails1');
Route::get('tech-détails/{id}','immoController@gettechById')->name('tech-détails');
// Route::get('immo-détails/{id}','immoController@getImmoById')->name('immo-détails');
Route::get('message-détailsAdmin/{id}','immoController@getMessageByIdAdmin')->name('message-détailsAdmin');
Route::get('message-détails/{id}','immoController@getMessageById')->name('message-détails');