<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', 'PageController@home')->name('home');

Route::resource('flight' , 'FlightController');

Route::get('dashboard/{page}' , 'PageController@dashboard')->name('dashboard');

Route::get('dashboard' , 'Pagecontroller@getPage')->name('getpage');

Route::get('seed' , 'FlightController@seed')->name('seed');
