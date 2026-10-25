<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CauThuController;


Route::get('/cauthu/list', [CauThuController::class, 'index']);

Route::get('/cauthu/add', [CauThuController::class, 'add']);      
Route::post('/cauthu/add', [CauThuController::class, 'insert']);   

Route::get('/cauthu/edit/{id}', [CauThuController::class, 'edit']);    
Route::post('/cauthu/edit/{id}', [CauThuController::class, 'update']);   

Route::get('/cauthu/delete/{id}', [CauThuController::class, 'delete']);