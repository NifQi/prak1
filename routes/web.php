<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('home_1461900124', 'HomeController@index');
Route::get('home_1461900124/article_1461900124', 'HomeController@article');
Route::get('home_1461900124/contactus_1461900124', 'HomeController@contactus');