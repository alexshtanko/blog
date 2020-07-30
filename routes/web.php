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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'SiteController@index');

Route::get('/articles', 'SiteController@articles');

Route::get('/contact', 'SiteController@contact');

Auth::routes();

Route::get('/admin', function () {
        return view('admin.index');
});

Route::get('/logout', function () {

    Auth::logout();

    return redirect('/');

});
