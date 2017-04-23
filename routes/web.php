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
use App\Models\Blog;
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/','Blogs@index');
Route::post('/write', 'Blogs@create');
Route::get('contents/{id}','Blogs@getContentByID');
//Route::get('/blogs/{id?}','Blogs@index');