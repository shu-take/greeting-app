<?php

use App\Http\Controllers\GreetingController;
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

Route::group(['prefix' => 'comments'], function(){
    Route::get('/random',[
        'uses' => 'GreetingController@random',
        'as' => 'comments.random'
    ]);
    Route::get('/{greeting}',[
        'uses' => 'GreetingController@show',
        'as' => 'comments.{greeting}'
    ]);
    Route::get('/freeword/{freeword}',[
        'uses' => 'GreetingController@free',
        'as' => 'comments.freeword.{freeword}'
    ]);
});