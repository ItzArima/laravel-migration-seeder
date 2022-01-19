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

Route::get('/blog', 'PageController@blog')->name('blog');

Route::get('/news', 'PageController@news')->name('news');

Route::get('/news/{id}' , 'SingleController@blog')->name('single');

