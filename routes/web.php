<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;



Route::resource('/index', IndexController::class);
Route::resource('/index/receita/',ReceitaController::class);
Route::resource('/index/despesa/',DespesaController::class);
Route::resource('/index/receita/view',ReceitaController::class);
Route::resource('/index/despesa/view',DespesaController::class);
Route::resource('/login', UserController::class);