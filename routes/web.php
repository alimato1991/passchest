<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Notes\Notes;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Entries\Entries;

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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', Entries::class)->name('entries');
    Route::get('/notes', Notes::class)->name('notes');    
});
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
