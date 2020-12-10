<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RecurringExpensesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('profits', ProfitController::class);
Route::apiResource('expenses', ExpenseController::class);
Route::apiResource('recurringexpenses', RecurringExpensesController::class);