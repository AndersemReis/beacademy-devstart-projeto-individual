<?php

use App\Http\Controllers\EmpresaController;
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
        Route::delete('/empresas/{empresa}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
        Route::get('/admin', [UserController::class, 'admin'])->name('admin');
        Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
        Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
        Route::post('/empresas',[EmpresaController::class, 'store'])->name('empresas.store');
        Route::get('/empresas/{empresa}', [EmpresaController::class, 'show'])->name('empresas.show');
        Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
        Route::put('/empresas/{empresa}', [EmpresaController::class, 'update'])->name('empresas.update');
        
        
    });