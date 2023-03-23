<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaposasController;

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

Route::get('/', function () {
    return view('welcome');
});

// Rotas para o CRUD de gatos

// Rota para a listagem de gatos
Route::get('/raposas', [RaposasController::class, 'index'])->name('raposas.index');

// Rota para o formulário de criação de gatos
Route::get('/raposas/novo', [RaposasController::class, 'create'])->name('raposas.create');

// Rota para o mostrar um gato específico
Route::get('/gatos/{gato}', [RaposasController::class, 'show'])->name('gatos.show');

// Rota para o formulário de edição de gatos
Route::get('/gatos/{id}/edit', [RaposasController::class, 'edit'])->name('gatos.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/gatos', [RaposasController::class, 'store'])->name('gatos.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/gatos/{id}', [RaposasController::class, 'update'])->name('gatos.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/gatos/{id}', [RaposasController::class, 'destroy'])->name('gatos.destroy');
