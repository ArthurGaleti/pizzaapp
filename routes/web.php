<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CargoController,
    ClienteController,
    EnderecoController,
    PedidoController,
    ProdutoController,
    ProdutoTamanhoController,
    ProfileController,
};

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * -----------------------------------
 * Cargos
 * -----------------------------------
 */

 Route::prefix('cargos')
  ->controller(CargoController::class)
  ->group(function ()  {
  Route::get('/','index')->name('cargo.index');
  Route::get('/novo','create')->name('cargo.create');
  Route::get('/{id}','show')->name('cargo.show');
  Route::get('/edit/{id}','edit')->name('cargo.edit');
  Route::get('/store','store')->name('cargo.store');
  Route::get('/update','update')->name('cargo.update');
  Route::get('/destroy','destroy')->name('cargo.destroy');
 });

 /**
 * -----------------------------------
 * Clientes
 * -----------------------------------
 */

 Route::prefix('clientes')
  ->controller(ClienteController::class)
  ->group(function ()  {
  Route::get('/','index')->name('cliente.index');
  Route::get('/novo','create')->name('cliente.create');
  Route::get('/{id}','show')->name('cliente.show');
  Route::get('/edit/{id}','edit')->name('cliente.edit');
  Route::get('/store','store')->name('cliente.store');
  Route::get('/update','update')->name('cliente.update');
  Route::get('/destroy','destroy')->name('cliente.destroy');
 });

 /**
 * -----------------------------------
 * Endereço
 * -----------------------------------
 */

 Route::prefix('enderecos')
  ->controller(EnderecoController::class)
  ->group(function ()  {
  Route::get('/','index')->name('endereco.index');
  Route::get('/novo','create')->name('endereco.create');
  Route::get('/{id}','show')->name('endereco.show');
  Route::get('/edit/{id}','edit')->name('endereco.edit');
  Route::get('/store','store')->name('endereco.store');
  Route::get('/update','update')->name('endereco.update');
  Route::get('/destroy','destroy')->name('endereco.destroy');
 });

 /**
 * -----------------------------------
 * Pedido
 * -----------------------------------
 */

 Route::prefix('pedidos')
 ->controller(PedidoController::class)
 ->group(function ()  {
 Route::get('/','index')->name('pedido.index');
 Route::get('/novo','create')->name('pedido.create');
 Route::get('/{id}','show')->name('pedido.show');
 Route::get('/edit/{id}','edit')->name('pedido.edit');
 Route::get('/store','store')->name('pedido.store');
 Route::get('/update','update')->name('pedido.update');
 Route::get('/destroy','destroy')->name('pedido.destroy');
 });

 /**
 * -----------------------------------
 * Produto
 * -----------------------------------
 */

 Route::prefix('produtos')
  ->controller(ProdutoController::class)
  ->group(function ()  {
  Route::get('/','index')->name('produto.index');
  Route::get('/novo','create')->name('produto.create');
  Route::get('/{id}','show')->name('produto.show');
  Route::get('/edit/{id}','edit')->name('produto.edit');
  Route::get('/store','store')->name('produto.store');
  Route::get('/update','update')->name('produto.update');
  Route::get('/destroy','destroy')->name('produto.destroy');
 });

 /**
 * -----------------------------------
 * PrpdutoTamanhos
 * -----------------------------------
 */

 Route::prefix('tamanhos')
 ->controller(ProdutoTamanhoController::class)
 ->group(function ()  {
 Route::get('/','index')->name('tamanho.index');
 Route::get('/novo','create')->name('tamanho.create');
 Route::get('/{id}','show')->name('tamanho.show');
 Route::get('/edit/{id}','edit')->name('tamanho.edit');
 Route::get('/store','store')->name('tamanho.store');
 Route::get('/update','update')->name('tamanho.update');
 Route::get('/destroy','destroy')->name('tamanho.destroy');
 });
require __DIR__.'/auth.php';
