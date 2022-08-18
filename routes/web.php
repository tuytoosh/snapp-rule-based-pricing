<?php

use App\Http\Controllers\ApplyController;
use Illuminate\Support\Facades\Route;

Route::get('apply', [ApplyController::class, 'apply']);
