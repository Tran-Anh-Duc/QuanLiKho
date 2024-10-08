<?php

use App\Http\Controllers\AclUserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [AclUserController::class, 'showViewLogIn'])->name('whLogin.viewLogin');
Route::post('/register_user', [AclUserController::class, 'store_register'])->name('whLogin.viewRegister');
