<?php

use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\ErrorTracingController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index']);
Route::get('/frequently-asked-questions',[ContentPageController::class, 'frequentlyAskedQuestions']);
Route::post('/error-tracing', [ErrorTracingController::class, 'sentryProxy']);
