<?php

use App\Http\Controllers\HomeController;
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

// naming routes 
Route::get('/index', [HomeController::class, 'index'])->name('index');

// Route parameters with patters (for text)
Route::get('/index/{text}', [HomeController::class, 'show'])->where('text','[a-zA-Z]+');

// Route parameters with patters (for num)
// Route::get('/index/{id}', [HomeController::class, 'show'])->where('id','[0-9]+');

// Route parameters with patters (for both num and text)
// Route::get('/index/{id}/{text}', [HomeController::class, 'show'])->where([
//     'id'=> '[0-9]+',
//     'text'=> '[a-zA-Z]+',
// ]);

// you can also write this type
// Route::get('/index', 'App\Http\Controllers\HomeController@index');