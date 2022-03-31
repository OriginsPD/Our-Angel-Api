<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssuedController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VoucherController;
use App\Http\Controllers\Api\StudentDirectoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    // Student Controller CRUD
    Route::apiResource('/studentdir', StudentDirectoryController::class);

    // Guardian Controller
    Route::apiResource('/guardian', UserController::class);

    // Voucher Controller Create View Show Edit
    Route::apiResource('/voucher', VoucherController::class);

    // Issued Voucher Controller Create View Show 
    Route::apiResource('/issue', IssuedController::class);

    // Delete Token And Logout User
    Route::get('/logout', [AuthController::class, 'logout']);
});
