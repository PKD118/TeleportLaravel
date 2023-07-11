<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);


route::get('/view_branches', [AdminController::class, 'view_branches']);

route::post('/add_branches', [AdminController::class, 'add_branches']);

route::get('/delete_branches/{id}', [AdminController::class, 'delete_branches']);

route::POST('/add_order', [AdminController::class, 'add_order']);

route::get('/view_order', [AdminController::class, 'view_order']);
