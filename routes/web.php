<?php

use App\Http\Controllers\ChamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MerryGoRoundController;
use App\Http\Controllers\ShareController;

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
require __DIR__.'/auth.php';

Route::middleware(['auth', 'chama'])->group( function () {
	Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resources([
		'members'       =>  MemberController::class,
		'loans'         =>  LoanController::class,
		'chama'			=>	ChamaController::class,
		'merrygoround'  =>  MerryGoRoundController::class,
		'shares'        =>  ShareController::class,
		'meetings'      =>  MeetingController::class,
		'deposits'      =>  DepositController::class
	]);
});