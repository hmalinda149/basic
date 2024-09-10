<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/',[HomeController::class,'index']);
route::get('redirect',[HomeController::class,'redirect']);


// <-----admin----->
Route::middleware(['admin'])->group(function () {
route::get('/add_data',[AdminController::class,'add_data']);
route::get('/view_data',[AdminController::class,'view_data']);
route::get('/edit_data/{id}',[AdminController::class,'edit_data']);
route::post('/upload_data',[AdminController::class,'upload_data']);
route::post('/update_details/{id}',[AdminController::class,'update_details']);
route::get('/delete/{id}',[AdminController::class,'delete']);
});
