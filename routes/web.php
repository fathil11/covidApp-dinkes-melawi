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



// Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//     Route::get('/', 'AdminController@index');
//     // Person Index
//     Route::get('/orang/{status}', 'PersonController@index');
//     // Person Create
//     Route::get('/orang/tambah', 'PersonController@create');
//     Route::post('/orang', 'PersonController@store');
//     // Person Edit
//     Route::get('/orang/{id}/edit', 'PersonController@edit');
//     Route::patch('/orang/{id}', 'PersonController@update');
//     Route::delete('/orang/{id}', 'PersonController@destroy');
// });

Auth::routes();
// Route::get('/login', 'PublicController');


// Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin/orang/tambah', function () {
    return view('layouts.admin');
});
Route::get('/admin/orang', function () {
    return view('layouts.admin');
});
Route::get('/admin/odp', function () {
    return view('layouts.admin');
});
Route::get('/admin/pdp', function () {
    return view('layouts.admin');
});
