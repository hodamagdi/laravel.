<?php
use App\Http\controllers\Clientcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients',[Clientcontroller::class , 'index']);
Route::get('/clients/create', [Clientcontroller::class,'create']);
Route::get('/clients/{id}', [Clientcontroller::class,'show']);
Route::post('/clients', [Clientcontroller::class,'store']);
Route::get('/clients/{id}/edit', [Clientcontroller::class,'edit']);
Route::put('/clients/{id}', [Clientcontroller::class,'update']);
Route::delete('/clients/{client}', [Clientcontroller::class,'delete']);

