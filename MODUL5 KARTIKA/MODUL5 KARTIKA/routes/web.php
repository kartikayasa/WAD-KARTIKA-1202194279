<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Vaccine;
use App\Http\Controllers\patient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('/vaccine/vaccine-read',[Vaccine::class, 'read']);
Route::get('/vaccine/vaccine-create', [Vaccine::class, 'create']);
Route::post('/store',[Vaccine::class, 'store']);
Route::get('/vaccine/vaccine-update/{$id}',[Vaccine::class, 'show']);
Route::get('/vaccine//vaccine-delete/{id}',[Vaccine::class, 'delete']);

Route::get('/patient/patient-read',[patient::class, 'read']);
Route::get('/patient/patient-list',[patient::class, 'list']);
Route::get('/patient/patient-create',[patient::class, 'create']);
Route::get('/patient/{$id}',[patient::class, 'delete']);
Route::get('/patient/patient-update',[patient::class, 'show']);
Route::get('/patient/patient-delete',[patient::class, 'delete');

