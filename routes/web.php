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
// Maintain App
// Route::get('/', function(){
//     return abort(404);
// });

// Route::get('testing', 'TestingController@index');

Route::get('/', 'PublicController@index')->name('home');
Route::get('/berita', 'PublicController@showAllPost');
Route::get('/berita/lihat/{slug}', 'PublicController@openPost');
Route::get('/hubungi-kami', 'PublicController@showCotactUs');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index');

    // Map
    Route::get('/peta', 'AdminController@showMap');
    Route::post('/peta', 'AdminController@storeMap');

    Route::get('/laporan', 'AdminController@showLaporan');

    Route::get('/download/laporan/harian/internal', 'LaporanController@downloadHarianInternal');
    Route::get('/download/laporan/total/internal', 'LaporanController@downloadTotalInternal');
    Route::get('/download/laporan/total/reactive', 'LaporanController@downloadTotalReactive');

    Route::get('/download/laporan/harian/perjalanan', 'LaporanController@downloadHarianPerjalanan');

    Route::get('/download/laporan/harian/provinsi/odp', 'LaporanController@downloadHarianProvinsiODP');
    Route::get('/download/laporan/harian/provinsi/pdp', 'LaporanController@downloadHarianProvinsiPDP');

    Route::get('/download/laporan/total/kecamatan/{district}', 'LaporanController@downloadTotalKecamatan');
    // Rapid Test Feautre
    Route::get('/orang/rapid-test', 'AdminController@showRapid');

    // Person Index
    Route::get('/orang', 'AdminController@showAllPerson');
    Route::get('/orang/pendatang', 'AdminController@showPendatangPerson');
    Route::get('/orang/odp', 'AdminController@showOdpPeople');
    Route::get('/orang/otg', 'AdminController@showOtgPeople');
    Route::get('/orang/pdp', 'AdminController@showPdpPeople');
    // Person Create
    Route::get('/orang/tambah', 'AdminController@showCreatePerson');
    Route::post('/orang', 'AdminController@storePerson');
    // Person Edit
    Route::get('/orang/{id}/edit', 'AdminController@showEditPerson');
    Route::patch('/orang/{id}', 'AdminController@updatePerson');
    // Person Delete
    Route::get('/orang/{id}/delete', 'AdminController@deletePerson');
    // Person Change Status
    Route::get('/orang/{id}/pdp', 'AdminController@pdpPerson');
    Route::get('/orang/{id}/pulang', 'AdminController@clearPerson');
    Route::get('/orang/{id}/reaktif', 'AdminController@reactivePerson');
    Route::get('/orang/{id}/non-reaktif', 'AdminController@nonReactivePerson');
    Route::get('/orang/{id}/odp', 'AdminController@odpPerson');
    Route::get('/orang/{id}/positif', 'AdminController@positivePerson');
    Route::get('/orang/{id}/negatif', 'AdminController@negativePerson');
    Route::get('/orang/{id}/meninggal', 'AdminController@diedPerson');

    /// Manual Section
    Route::get('/manual', 'AdminController@showManual');
    Route::post('/manual', 'AdminController@updateManual');
});

Route::group(['prefix' => '/admin-puskesmas', 'middleware' => 'perbatasanadmin'], function () {
    Route::get('/', 'PerbatasanController@index');
    Route::get('/orang', 'PerbatasanController@showAllOrang');
    Route::get('/pendatang', 'PerbatasanController@showPendatangOrang');

    Route::post('/store', 'PerbatasanController@store');
    Route::get('/pelaku-perjalanan', 'PerbatasanController@showPelakuPerjalanan');
    Route::post('/enter/{id}', 'PerbatasanController@enterOrang');
    Route::delete('/delete/{id}', 'PerbatasanController@deleteOrang');
    Route::get('/pelaku-perjalanan', 'PerbatasanController@showPelakuPerjalanan');
});

Route::group(['prefix' => '/admin/content', 'middleware' => 'contentadmin'], function () {
    Route::get('/', 'ContentAdminController@index');

    Route::get('/post', 'ContentAdminController@showAllPost');

    Route::get('/post/tambah', 'ContentAdminController@showCreatePost');
    Route::post('/post', 'ContentAdminController@storePost');

    Route::get('/post/{id}/edit', 'ContentAdminController@showEditPost');
    Route::patch('/post/{id}', 'ContentAdminController@updatePost');

    Route::get('/post/{id}/delete', 'ContentAdminController@deletePost');
});

Auth::routes();
Route::get('/logout', 'PublicController@logout');

// Route::get('/', 'HomeController@index')->name('home');
