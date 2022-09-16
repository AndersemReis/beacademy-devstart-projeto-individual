<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\MovimentosfinanceirosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZooController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/users/{id}/posts', [PostController::class, 'show'])->name('posts.show');
    
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    
    Route::delete('/zoos/{id}', [ZooController::class, 'destroy'])->name('zoos.destroy');
    Route::get('/zoos',[ZooController::class, 'index'])->name('zoos.index');
    Route::put('/zoos/{id}', [ZooController::class, 'update'])->name('zoos.update');
    Route::get('/zoos/{id}/edit', [ZooController::class, 'edit'])->name('zoos.edit');
    Route::get('/zoos/create', [ZooController::class, 'create'])->name('zoos.create');
    Route::post('/zoo', [ZooController::class, 'store'])->name('zoos.store');
    Route::get('/zoos/{id}', [ZooController::class, 'show'])->name('zoos.show');
    

    });
    
    Route::middleware(['auth', 'admin'])->group(function(){
        
        Route::get('/admin', [UserController::class, 'admin'])->name('admin');

        Route::delete('/empresas/{empresa}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
        Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
        Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
        Route::post('/empresas',[EmpresaController::class, 'store'])->name('empresas.store');
        Route::get('/empresas/{empresa}', [EmpresaController::class, 'show'])->name('empresas.show');
        Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
        Route::put('/empresas/{empresa}', [EmpresaController::class, 'update'])->name('empresas.update');
        
        Route::delete('/produtos/{id}',[ProdutosController::class,'destroy'])->name('produtos.destroy');
        Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
        Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
        Route::post('/produtos',[ProdutosController::class,'store'])->name('produtos.store');
        Route::get('/produtos/{id}',[ProdutosController::class, 'show'])->name('produtos.show');
        Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
        Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
        Route::put('/produtos/{id}',[ProdutosController::class,'update'])->name('produtos.update');
       
        Route::delete('/movimentos_financeiros/{id}', [MovimentosfinanceirosController::class, 'destroy'])->name('movimentos_financeiros.destroy');
        Route::get('/movimentos_financeiros',[MovimentosfinanceirosController::class, 'index'])->name('movimentos_financeiros.index');
        Route::get('/movimentos_financeiros/create', [MovimentosfinanceirosController::class, 'create'])->name('movimentos_financeiros.create');
        Route::post('/movimentos_financeiros', [MovimentosfinanceirosController::class, 'store'])->name('movimentos_financeiros.store');
        Route::get('/movimentos_financeiros/{id}', [MovimentosfinanceirosController::class, 'show'])->name('movimentos_financeiros.show');
        Route::get('/movimentos_financeiros/{id}/edit', [MovimentosfinanceirosController::class], 'edit')->name('movimentos_financeiros.edit');
        Route::get('/movimentos_financeiros/{id}', [MovimentosfinanceirosController::class, 'update'])->name('movimentos_financeiros.update');
    });
    

