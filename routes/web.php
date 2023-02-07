<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/produtos', [ShopController::class, 'index'])->name('produtos');
Route::match(['get', 'post'], '/produtos/{idcategoria}', [ShopController::class, 'index'])->name('produto_por_id');
Route::match(['get', 'post'], '/carrinho/adicionar/{idproduto}', [ShopController::class, 'adicionarCarrinho'])->name('adicionar_carrinho');
Route::get('/sobre', [AboutController::class, 'index'])->name('sobre');
Route::get('/contato', [ContactController::class, 'index'])->name('contato');
Route::get('/checkout', [ShopController::class, 'Check'])->name('checkout');
Route::get('/detalhes/{id}', [ShopController::class, 'Details'])->name('details');
Route::post('/comentar', [ShopController::class, 'Comentar'])->name('comentar');
Route::match(['get', 'post'], '/excluircarrinho/{indice}', [ShopController::class, 'excluirCarrinho'])->name('excluir_carrinho');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
