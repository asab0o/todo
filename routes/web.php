<?php

use Illuminate\Support\Facades\Route;
//laravel8から下記記述が必要
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Route::get('/folders/{id}/tasks', function () {
//     return 'Hello World';
// });
