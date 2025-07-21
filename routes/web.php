<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerModelart;

Route::get('index', function () {
    return view('index');
})->name('inicio');

Route::get('/obras', [controllerModelart::class, 'index'])->name('indexObras');
Route::get('/obras/novo', [controllerModelart::class, 'crate'])->name('novaObra');
Route::get('/obras', [controllerModelart::class, 'store'])->name('gravaNovaObra');
Route::get('/obras/apagar/{id}', [controllerModelart::class, 'destroy'])->name('deletaObra');
Route::get('/obras/editar/{id}', [controllerModelart::class, 'edit'])->name('editaObra');
Route::get('/obras/{id}', [controllerModelart::class, 'update'])->name('atualizaObra');
Route::get('/obras/pesquisar', [controllerModelart::class, 'pesquisarObra'])->name('pesquisarObra');
Route::get('/obras/procurar', [controllerModelart::class, 'procurarObra'])->name('procurarObra');