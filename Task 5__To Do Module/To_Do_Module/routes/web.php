<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

// The route for the index page
Route::get('/', [TodoController::class, 'index']) -> name('index');

// The route for the create page
Route::get('/create', [TodoController::class, 'create']) -> name('create');

// The route for the store the data
Route::post('/store', [TodoController::class, 'store']) -> name('store');

// The route for the edit page
Route::get('/edit', [TodoController::class, 'edit']) -> name('edit');

// The route for the update the data
Route::put('/update', [TodoController::class, 'update']) -> name('update');

// The route for the delete the data
Route::delete('/delete', [TodoController::class, 'delete']) -> name('delete');
