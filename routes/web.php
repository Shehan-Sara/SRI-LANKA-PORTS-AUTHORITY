<?php

use App\Http\Controllers\TenderController;
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

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/home', function () {
    return view('admin.home');
})->name('AdminHome');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('AdminDashboard');

Route::get('/localpurchase', [TenderController::class, 'viewLocal'])->name('AdminLocal');

Route::get('/foreignpurchase', [TenderController::class, 'viewForign'])->name('AdminForeign');

Route::get('/otherpurchase', [TenderController::class, 'viewOther'])->name('AdminOther');


Route::get('/massages', function () {
    return view('admin.massages');
})->name('AdminMassages');

Route::get('/users', function () {
    return view('admin.users');
})->name('AdminUsers');

Route::get('/addrecord', function () {
    return view('admin.insert');
})->name('AdminInsert');

Route::post('/insertdata', [TenderController::class, 'addrecord'])->name('AddRecord');