<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

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
    // return view('auth.login');
    return view('auth.login');
});



Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        // Task::where('user_id', Auth::user()->id)->with(['subtasks'])->get();
        // $tasks = \App\Models\Task::first();//->subtasks;
        // dd($tasks->subtasks);

        return view('dashboard');
    })->name('dashboard');

    Route::controller(CategorieController::class)->group(function () {
        Route::get('/categories', 'index')->name('categories.index');
        Route::get('/categories/index', 'index')->name('categories.index');
        Route::get('/categories/create', 'create')->name('categories.create');
        Route::post('/categories/update/{categorie}', 'update')->name('categories.update');
        Route::post('/categories/destroy/{categorie}', 'destroy')->name('categories.destroy');
        // Route::post('/categories/store', 'store')->name('categories.store');
        // Route::get('/categories/edit', 'edit')->name('categories.edit');
    });

    Route::controller(TaskController::class)->group(function () {
        Route::get('/tasks', 'index')->name('tasks.index');
        Route::get('/tasks/index', 'index')->name('tasks.index');
        Route::post('/tasks/store', 'store')->name('tasks.store');
        Route::get('/tasks/create', 'create')->name('tasks.create');
        Route::post('/tasks/update/{task}', 'update')->name('tasks.update');
        Route::post('/subtasks/update/{subtask}', 'update_subtask')->name('subtasks.update');
        Route::post('/subtasks/store/{task}', 'store_subtask')->name('subtasks.store');
        // Route::post('/tasks/update/{categorie}', 'update')->name('tasks.update');
        // Route::post('/tasks/destroy/{categorie}', 'destroy')->name('tasks.destroy');
    });
});


// Route::middleware('auth')->group(function () {



//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




require __DIR__ . '/auth.php';
