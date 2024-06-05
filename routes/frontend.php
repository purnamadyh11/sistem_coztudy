<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\TransactionController;

Route::get('/', [FrontendController::class, 'index']);