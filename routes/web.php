<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\siteController;
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

Route::get('/', [siteController::class, 'index'])->name('index');

Route::get('/contato', [siteController::class, 'contato']);

Route::get('/sobre', [siteController::class, 'sobre']);

Route::get('/servicos', [siteController::class, 'servicos']);

Route::get('/servico/{id}', [siteController::class, 'servico']);

Route::get('/saudacao/{nome?}', Saudacao::class);


// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

// Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

// Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');

// Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');

// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::resource('/clients', ClientController::class);