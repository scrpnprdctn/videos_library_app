<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [ProjectController::class, 'index'])->name('project.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::delete('/project/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/{project}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/update/{project}', [ProjectController::class, 'update'])->name('project.update');
