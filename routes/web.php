<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\KioskController;
use App\Http\Controllers\SalesController;


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


Route::get('/layout', function () {
    return view('layouts.master');
});
Route::get('/layoutpupuk', function () {
    return view('layouts.pupukAdminMaster');
});



//Route::get('/login', [AccountController::class, 'userAuth'])->name('authenticate');
Route::post('/login', [AccountController::class, 'userAuth'])->name('authenticate');

//Route::get('/signup', [AccountController::class, 'register']);
Route::post('/signup', [AccountController::class, 'register'])->name('signup');

Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/listOfApplications', [KioskController::class, 'viewListOfApplications'])->name('dashboard');

Route::get('/newApplication', function(){
    return view('ManageKiosk.KioskParticipant.newApplication');
})->name('newApplication');

Route::post('/newApplication', [KioskController::class, 'newApplication'])->name('newApplicationSubmission');

Route::get('/terms-and-condition', function(){
    return view('ManageKiosk.KioskParticipant.termsAndCondition');
})->name('terms-and-condition');

Route::get('/viewApplication/{id}', [KioskController::class, 'viewApplication'])->name('viewApplication');

Route::post('/viewApplication/edit/{id}', [KioskController::class, 'editApplication'])->name('editApplication');

Route::get('/viewApplication/delete/{id}', [KioskController::class, 'deleteApplication'])->name('deleteApplication');

Route::get('/pupuk/listofapplication', function(){
    return view('ManageKiosk.PUPUKAdmin.listOfApplicationsAndKiosk');
})->name('pupukViewApplication');


Route::get('/pupuk/application-approval', function(){
    return view('ManageKiosk.PUPUKAdmin.applicationApproval');
})->name('pupukApplicationApproval');

Route::get('/pupuk/view-application', function(){
    return view('ManageKiosk.PUPUKAdmin.viewApplication');
})->name('pupukViewApplication');

Route::get('/sales/create', [SalesController::class, 'create'])->name('ManageReport.KioskParticipant.addSales');
Route::post('/sales/store', [SalesController::class, 'store'])->name('ManageReport.KioskParticipant.addSales');
// Update sales record
Route::put('/{id}', [SalesController::class, 'update'])->name('ManageReport.KioskParticipant.updateSales');
Route::delete('/sales/delete/{id}', [SalesController::class, 'destroy'])->name('sales.delete');