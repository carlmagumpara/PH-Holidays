<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolidayController;

Route::get('/holidays', [HolidayController::class, 'index']);
