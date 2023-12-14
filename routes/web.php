<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
    return view('ManageAccount.login');
})->name('login');


Route::get('/register', function () {
    return view('ManageAccount.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('layouts.master');
});


Route::get('/listOfApplications', function(){
    return view('ManageKiosk.KioskParticipant.listOfApplications');
})->name('dashboard');

Route::get('/login', [AccountController::class, 'userAuth'])->name('authenticate');
Route::post('/login', [AccountController::class, 'userAuth']);