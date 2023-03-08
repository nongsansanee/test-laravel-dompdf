<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/index', [EmployeeController::class,'index'] );
Route::get('/employee/viewpdf', [EmployeeController::class, 'viewPDF'])->name('view-emp-pdf');
Route::post('/employee/downloadpdf', [EmployeeController::class, 'downloadPDF'])->name('download-emp-pdf');