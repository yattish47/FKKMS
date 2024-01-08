<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\KioskController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ComplaintController;


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

Route::get('/logout/{userType}', [AccountController::class, 'logout'])->name('logout');

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

Route::get('/pupuk/listofapplication', [KioskController::class, 'viewListOfApplicationForPupuk'])->name('pupukViewListOfApplication');


Route::get('/pupuk/application-approval/{id}/{from}', [KioskController::class, 'viewApplicationForPupuk'])->name('pupukApplicationApproval');

Route::post('/pupuk/application-approval/{id}', [KioskController::class, 'applicationApprovalForPupuk'])->name('applicationApprovalForPupuk');


Route::get('/pupuk/view-application/{id}/{from}', [KioskController::class, 'viewApplicationForPupuk'])->name('pupukViewApplication');

Route::get('/pupuk/delete-application/{id}', [KioskController::class, 'deleteApplicationForPupuk'])->name('pupukDeleteApplication');



Route::get('/ManageReport/KioskParticipant/KPViewSales', [SalesController::class, 'index'])->name('reports');

Route::post('/ManageReport/KioskParticipant/addSales', [SalesController::class, 'store'])->name('reports.store');

Route::get('/ManageReport/KioskParticipant/addSales', function () {return view('ManageReport.KioskParticipant.addSales');})->name('view');

Route::get('/reports-filter', [SalesController::class, 'filter'])->name('reports.filter');

Route::get('/ManageReport/KioskParticipant/{ReportID}/edit', [SalesController::class, 'edit'])->name('reports.edit');

Route::put('/ManageReport/KioskParticipant/{ReportID}/update', [SalesController::class, 'update'])->name('reports.update');

Route::get('/ManageReport/KioskParticipant/{ReportID}/delete', [SalesController::class, 'destroy']);

Route::get('/ManageReport/PUPUKAdmin/PAdminViewSales', [SalesController::class, 'PadminView'])->name('PadminViewSales');

Route::get('/reports-filterPAdmin', [SalesController::class, 'filterPAdmin'])->name('reports.filterPAdmin');




//complaint module
Route::get('/complaintlist', [ComplaintController::class, 'index'])->name('complaintlist');

Route::get('/kiosk/complaint',[ComplaintController::class,'index']);
Route::get('/kiosk/newApplication',[ComplaintController::class,'newApplication']);
Route::get('/viewComplaint/{id}',[ComplaintController::class,'viewComplaint']);
Route::get('/kiosk/updateComplaints/{id}',[ComplaintController::class,'updateComplaints']);
Route::post('/kiosk/addComplaint',[ComplaintController::class,'addComplaint']);
Route::post('/kiosk/updateComplaint',[ComplaintController::class,'updateComplaint']);
Route::get('/kiosk/deleteComplaint/{id}',[ComplaintController::class,'deleteComplaint']);

Route::get('/tech/complaint',[ComplaintController::class,'techComplaint'])->name('techcomplaintlist');
Route::post('/tech/addComplaint',[ComplaintController::class,'addComplaint']);
Route::post('/tech/updateComplaint',[ComplaintController::class,'updateComplaint']);
Route::get('/tech/deleteComplaint/{id}',[ComplaintController::class,'deleteComplaint']);
Route::get('/tech/viewComplaint/{id}',[ComplaintController::class,'techViewComplaint']);
Route::get('/tech/editComplaint/{id}',[ComplaintController::class,'techEditComplaint']);
Route::get('/tech/statusComplaint/{id}/{status}',[ComplaintController::class,'statusComplaint']);