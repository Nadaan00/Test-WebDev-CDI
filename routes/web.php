<?php

use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringControllerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/monitoring', MonitoringController::class);
