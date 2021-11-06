<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\YoutuberResourceContoller;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\ContentController;
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
//     return view('Home');
// });

// Route::get('/ListYoutube', function () {
//     return view('ListYoutube');
// });

// Route::get('/CreateListYoutube', function () {
//     return view('CreateListYoutube');
// });

// Route::get('/ListYoutube', [YoutubeResourceController::class, 'index']);
// Route::get('/CreateListYoutube', [YoutubeController::class, 'create']);

// Route::get('/ListYoutube/{code}', [YoutubeController::class, 'show']);

Route::resource('/ListYoutube', YoutuberResourceContoller::class);
// Route::get('/CreateListYoutube', [YoutubeController::class, 'create']);

// Route::get('/', [Controller::class, 'index']);
// Route::resource('/EditListYoutube', YoutuberResourceContoller::class);

Route::resource('/ShowContent', ContentController::class);
Route::get('/',[Controller::class, 'index']);



