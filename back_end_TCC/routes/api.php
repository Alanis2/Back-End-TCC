<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('CadastroItens', 'App\Http\Controllers\api\CadastrarItensController');

// $this->apiResource('Doador', 'App\Http\Controllers\api\DoadorController');

Route::apiResource('Doador', 'App\Http\Controllers\api\DoadorController');