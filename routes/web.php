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
    return view('welcome');
});
// Route to users -string
Route::get('/home', function(){
    return 'Home';
});
// Route to users - array(json)
Route::get('/home', function(){
    return ['Home','Page','Index Page'];
});
// Route to users - json object
Route::get('/home', function(){
    return response()->json([
        'name'=>'Yunesh',
        'age'=>'18'
    ]);
});
