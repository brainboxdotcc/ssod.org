<?php

use App\Http\Controllers\ErrorTracingController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index']);
Route::post('/error-tracing', [ErrorTracingController::class, 'sentryProxy']);
