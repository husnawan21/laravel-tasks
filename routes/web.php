<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileInformationController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', fn () => view('home'));

// Route::get('profile', function (Request $request) {
//   $name = $request->name;
//   return view('profile', ['name' => $name]);
// });

Route::get('/', HomeController::class);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('about', [AboutController::class, '__invoke']);

Route::get('profile/{identifier}', [ProfileInformationController::class, 'index']);

// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']); // valid walau tanpa name

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']); // valid walau tanpa name
});
