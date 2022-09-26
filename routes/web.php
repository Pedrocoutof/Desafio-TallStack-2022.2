<?php

use App\Http\Livewire\CreatePerson;
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

Route::get('/person', function () {
    return view('person');
});

Route::get('/jogador', function () {
    return view('jogador');
});

Route::get('/time', function () {
    return view('time');
});

Route::get('/campeonatos', function () {
    return view('campeonatos');
});
