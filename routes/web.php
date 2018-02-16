<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Page
Route::get('/', function () {
    return view('pages.welcome');
});

//About Page
Route::get('/about', function () {
    return view('pages.about');
});

//Posts Page
Route::get('/mission', function () {
    return view('pages.mission');
});

// Route::get('/', [
//   'uses' => 'ContactMessageController@create'
// ]);
//
// Route::post('/home', [
//   'uses' => 'ContactMessageController@store',
//   'as' => 'contact.store'
// ]);

//Contact Page
Route::get('/contact', [
  'uses' => 'ContactMessageController@create',
  'as' => 'contact.create'
]);

Route::post('/contact', [
  'uses' => 'ContactMessageController@store',
  'as' => 'contact.store'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
