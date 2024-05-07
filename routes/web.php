<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('/task',TaskController::class);

Route::put('task/{task}/toggle-complete', function (Task $task) {
    $task->toggleComplete();

    return redirect()->back()->with('success', 'Task updated successfully!');
})->name('task.toggle-complete');