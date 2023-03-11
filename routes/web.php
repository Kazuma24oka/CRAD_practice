<?php

use App\Http\Controllers\RecordController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 追加分
Route::get('/', [RecordController::class,'index'])->name('index');
Route::get('/create', [RecordController::class,'create'])->name('create');
Route::post('/store', [RecordController::class,'store'])->name('store');
Route::get('/edit/{id}', [RecordController::class,'edit'])->name('edit');
Route::put('/update/{id}', [RecordController::class,'update'])->name('update');
Route::delete('/delete/{id}', [RecordController::class,'delete'])->name('delete');