<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; 

Route::get('/', [WelcomeController::class, 'index']);

Route::get('contact', [WelcomeController::class, 'contact']);

Route::get('about', [WelcomeController::class, 'about']);

Route::get('contactp', [WelcomeController::class, 'contactp']);

Route::get('despre', [WelcomeController::class,'despre']);

Route::get('despresir', [WelcomeController::class,'despresir']);
