<?php

use App\Http\Controllers\telegram;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramBotController;

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
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/historia', function () {
    return view('nuestraHistoria');
});

Route::get('/producto', function () {
    return view('nuestroProducto');
});

Route::get('/social', function () {
    return view('esquemaSocial');
});

Route::get('/pedido', function () {
    return view('enviarPedido');
});

Route::get('/updated-activity','App\Http\Controllers\TelegramBotController@updatedActivity' )->name('actividad');
Route::post('/send-message', 'App\Http\Controllers\TelegramBotController@storeMessage');

