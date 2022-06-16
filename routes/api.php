<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmploeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get all employees
Route::get('employee', [EmploeeController::class, 'getEmployee']);
Route::get('employee/{id}', [EmploeeController::class, 'getEmployeeById']);
Route::post('addEmployee', [EmploeeController::class, 'addEmployee']);
Route::put('updateEmployee/{id}', [EmploeeController::class, 'updateEmployee']);
Route::delete('destroyEmployee/{blog}', [EmploeeController::class, 'destroyEmployee']);
