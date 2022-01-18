<?php

use App\Events\PukeEvent;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/puke/{user_id}', function ($user_id) {
    event(new PukeEvent('Hello',$user_id));
    return 'Done';
});

Route::post('message/create', function (Request $request) {
    
});

Route::get('/{page}', 'ViewkernelController');
