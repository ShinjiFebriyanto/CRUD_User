<?php

use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAllUserForm']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UserController::class,'loadEditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');