<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPesertaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'user/'], function () {
    Route::get("register", [UserController::class, "register"]);
    Route::post("process-register", [UserController::class, "processRegister"]);
    Route::get("register-success/{id}", [UserController::class, "registerSuccess"]);

    
    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);

    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);
    Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('datapeserta')->group(function(){
    Route::get('/view',[DataPesertaController::class, 'DataPesertaView'])->name('datapeserta.view');
    Route::get('/add',[DataPesertaController::class, 'DataPesertaAdd'])->name('datapeserta.add');
    Route::post('/store',[DataPesertaController::class, 'DataPesertaStore'])->name('datapeserta.store');
    Route::get('/edit/{id}',[DataPesertaController::class, 'DataPesertaEdit'])->name('datapeserta.edit');
    Route::post('/update/{id}',[DataPesertaController::class, 'DataPesertaUpdate'])->name('datapeserta.update');
    Route::get('/delete/{id}',[DataPesertaController::class, 'DataPesertaDelete'])->name('datapeserta.delete');
}); 
