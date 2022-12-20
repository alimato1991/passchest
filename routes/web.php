<?php

use App\Http\Livewire\Entries\Entries;
use App\Http\Livewire\Notes\Notes;
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

Route::get('/', Entries::class)->name('entries');
Route::get('/notes', Notes::class)->name('notes');
