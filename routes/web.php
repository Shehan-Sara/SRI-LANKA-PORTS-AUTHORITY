<?php

use App\Http\Controllers\TenderController;
use App\Http\Controllers\UserController;
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
})->name('Welcome');

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/addrecord', function () {
    return view('admin.insert');
})->name('AdminInsert');


Route::post('/varify', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/newuser', [UserController::class, 'adduser'])->name('adduser');
Route::post('/usercreate', [UserController::class, 'usercreate'])->name('usercreate');


Route::middleware(['admin'])->group(function () {

    // tender Record View
    Route::get('/localpurchase', [TenderController::class, 'viewLocal'])->name('AdminLocal');
    Route::get('/foreignpurchase', [TenderController::class, 'viewForign'])->name('AdminForeign');
    Route::get('/otherpurchase', [TenderController::class, 'viewOther'])->name('AdminOther');

    // Tender record manageent
    Route::get('/recorddelete/{id}', [TenderController::class, 'deleteRecord'])->name('DeleteRecord');
    Route::post('/insertdata', [TenderController::class, 'addrecord'])->name('AddRecord');

    // User Management 
    Route::get('/users', [UserController::class, 'viewuser'])->name('AdminUsers');

    Route::get('/home', function () {
        return view('admin.home');
    })->name('AdminHome');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('AdminDashboard');

    Route::get('/massages', function () {
        return view('admin.massages');
    })->name('AdminMassages');

});