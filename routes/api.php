<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactUsController;

Route::get('/travels', [TravelController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/plans', [PlanController::class, 'index']);

Route::get('/comments', [CommentsController::class, 'index']);

Route::post('/contact-us', [ContactUsController::class, 'send']);

