<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Route;

Route::get('apply', [ApplyController::class, 'apply']);

Route::post('condition', [ConditionController::class, 'add']);
Route::get('conditions', [ConditionController::class, 'all']);
Route::post('rule', [RuleController::class, 'add']);
Route::get('rules', [RuleController::class, 'all']);
Route::post('action', [ActionController::class, 'add']);
Route::get('actions', [ActionController::class, 'all']);
