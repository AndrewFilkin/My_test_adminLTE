<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmploeeController;


Route::get('/', function () {
    return [];
});

//get all employees
Route::get('employee', [EmploeeController::class, 'getEmployee']);
Route::get('employee/{id}', [EmploeeController::class, 'getEmployeeById']);
Route::post('addEmployee', [EmploeeController::class, 'addEmployee']);
Route::put('updateEmployee/{id}', [EmploeeController::class, 'updateEmployee']);
Route::delete('destroyEmployee/{blog}', [EmploeeController::class, 'destroyEmployee']);
