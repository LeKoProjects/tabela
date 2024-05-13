<?php

use App\Http\Controllers\TabelaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
Route::get('/', [TabelaController::class, 'atualizar']);
=======
Route::get('/', [TabelaController::class, 'atualizar']);
>>>>>>> c46d5d5e88586c1c7d50b3ae0b67a29b3674f847
