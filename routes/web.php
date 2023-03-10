<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', [MainController :: class, 'projects'])-> name('project.view');

Route :: get('/project/show/{project}', [MainController :: class, 'projectShow'])
    -> name('project.show');

Route :: get('/project/delete/{project}', [MainController :: class, 'projectDelete'])
    -> name('project.delete');

Route :: get('/project/create', [MainController :: class, 'projectCreate'])
    -> name('project.create');

Route :: post('/project/store', [MainController :: class, 'projectStore'])
    -> name('project.store');

Route :: get('/project/edit/{project}', [MainController :: class, 'projectEdit'])
    -> name('project.edit');

Route :: post('/project/update/{project}', [MainController :: class, 'projectUpdate'])
    -> name('project.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
