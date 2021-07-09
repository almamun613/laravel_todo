<?php

use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\TodoController;
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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
})->name('loginPlease');
Route::post('/login', [ControllerUser::class,'login'])->name('login.check');
Route::get('/logout', [ControllerUser::class,'logout'])->name('user.logout');


Route::get('register',[ControllerUser::class,'showRegister'])->name('user.register.show');
Route::post('register',[ControllerUser::class,'register'])->name('user.register');

Route::group(['middleware'=>'UserAuth'],function (){
    Route::get('/todo', [TodoController::class,'index'])->name('todoList');
    Route::post('/todo', [TodoController::class,'saveTask'])->name('todoList.save');


    Route::get('/status/{id}/{status}/change', [TodoController::class,'changeStatus'])->name('todo.changeStatus');
    Route::get('/todo/{id}/edit', [TodoController::class,'editShow'])->name('edit.show');
    Route::post('/todo/{id}/edit', [TodoController::class,'editSave'])->name('edit.save');

    Route::get('/todo/{id}/delete', [TodoController::class,'delete'])->name('task.delete');
});
