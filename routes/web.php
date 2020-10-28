<?php

use App\Actions\FinishOnboarding;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware('guest')->get('/', function () {
   return Inertia::render('Welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'onboarded'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->get('/transactions/school-fees-and-accommodation', function () {
    return inertia()->render('Transaction/SchoolFees/Index');
});

Route::middleware(['auth:sanctum', 'onboarded'])->resource('/transactions', TransactionController::class);

Route::middleware(['guest'])->get('register-as-institution', function () {
    return Inertia::render('Register-As-Institution');
});

Route::resource('/institutions', InstitutionController::class);

Route::middleware(['auth:sanctum'])->get('onboarding', function () {
    return Inertia::render('Onboarding');
})->name('onboarding');

Route::middleware(['auth:sanctum, onboarded'])->post('/onboarding', FinishOnboarding::class)
->name('finish_onboarding');
