<?php

use App\Http\Controllers\adminController;
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


Route::redirect('/','register');
// Route::get('/', function () {
//     return view('welcame');
// });

Route::get('/home',[adminController::class,'index']);
Route::post('/addbook',[adminController::class,'bookregister']);
Route::get('/home',[adminController::class,'list']);
Route::post('/search',[adminController::class,'search']);
Route::get('/edit_book/{id}',[adminController::class,'edit']);
Route::post('/bookupdate/{id}',[adminController::class,'update']);
Route::get('/delete_data/{id}',[adminController::class,'delete']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
