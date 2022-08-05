<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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



 
Route::get('/video-upload', [ VideoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('/video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');

