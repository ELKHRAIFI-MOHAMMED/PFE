<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/afficher-partie_corp ', [Controller::class, 'afficher_partie_corp']);
Route::get('/afficher-malade/{idp}/{idg} ', [Controller::class, 'afficher_malade']);
Route::get('/afficher-consigne/{idm} ', [Controller::class, 'afficher_consigne']);
Route::get('/afficher-symptome/{idm} ', [Controller::class, 'afficher_Symptome']);
Route::get('/afficher-medcin/{ids} ', [Controller::class, 'afficher_medcin']);