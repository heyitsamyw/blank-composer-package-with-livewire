<?php

use Illuminate\Support\Facades\Route;
use blankpackage\blank\Http\Controllers\BlankController;

Route::get('/blank', [BlankController::class, 'index']);
