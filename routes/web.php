<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::view('/', 'userview');
Route::POST('ram', [StudentController::class, 'addData']);
Route::get('list', [StudentController::class, 'show']);
Route::get('delete/{email}', [StudentController::class, 'deleteData']);
Route::get('edit/{email}', [StudentController::class, 'showData']);
Route::post('update/{email}', [StudentController::class, 'update']);


