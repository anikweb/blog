<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use GuzzleHttp\Middleware;
use App\Http\Controllers\{
    DashboardController,
    FrontendController,
    RoleController,
};

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

// Frontend
Route::get('/',[FrontendController::class,'index'])->name('frontend');

// Middleware Group
Route::middleware(['verified','auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    // Role Management
    Route::get('/dashboard/assign-role',[RoleController::class,'assignRole'])->name('backend.create.role');
    Route::post('/dashboard/assign-role/update',[RoleController::class,'assignRoleUpdate'])->name('backend.role.assign-role');
    Route::get('/dashboard/roles',[RoleController::class,'roles'])->name('backend.roles');
    Route::get('/dashboard/role/edit/{id}',[RoleController::class,'editRole'])->name('backend.role.edit');
    Route::post('/dashboard/role/give-permission',[RoleController::class,'givePermission'])->name('backend.role.give-permission');
    Route::get('/dashboard/users',[RoleController::class,'indexUser'])->name('backend.user');


});


// Email Verification Start
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Email Verification End

require __DIR__.'/auth.php';
