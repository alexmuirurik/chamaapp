<?php

use App\Http\Controllers\ChamaController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MerryGoRoundController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\UserController;
use App\Models\Dashboard;

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

Route::middleware('auth')->group( function () {
    Route::resources([
		'/'				=>	DashboardController::class,
		'members'       =>  UserController::class,
		'loans'         =>  LoanController::class,
		'chama'			=>	ChamaController::class,
		'merrygoround'  =>  MerryGoRoundController::class,
		'shares'        =>  ShareController::class,
		'meetings'      =>  MeetingController::class,
		'deposits'      =>  DepositController::class
	]);
});