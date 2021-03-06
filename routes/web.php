<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firmayonetimi;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [Firmayonetimi::class,'index'])->name('firma_ekle');
Route::get('firmalar/list', [Firmayonetimi::class, 'getFirmalar'])->name('firmalar.list');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
