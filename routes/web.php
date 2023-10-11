<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HiyokoController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\TopicController;
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

Auth::routes();


Route::get('/', [TopController::class, 'index'])->name('top');

Route::get('/event/create', [EventController::class, 'create'])->middleware(['auth'])->name('event.create');
Route::post('/event', [EventController::class, 'store'])->middleware(['auth'])->name('event.store');
Route::get('/event/{id}', [EventController::class, 'edit'])->middleware(['auth'])->name('event.edit');
Route::put('/event/{id}', [EventController::class, 'update'])->middleware(['auth'])->name('event.update');
Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.delete');

Route::get('/topic/create', [TopicController::class, 'create'])->middleware(['auth'])->name('topic.create');
Route::post('/topic', [TopicController::class, 'store'])->middleware(['auth'])->name('topic.store');
Route::get('/topic/{id}', [TopicController::class, 'edit'])->middleware(['auth'])->name('topic.edit');
Route::put('/topic/{id}', [TopicController::class, 'update'])->middleware(['auth'])->name('topic.update');
Route::delete('/topic/{id}', [TopicController::class, 'destroy'])->name('topic.delete');

Route::prefix('/contact')->group(function() {
    Route::get('/', function() {
        return view('contacts.index');
    })->name('contact.index');

    Route::get('/teiki', function() {
        return view('contacts.teiki.index');
    })->name('contact.teiki');
    Route::post('/teiki/confirm', [ContactController::class, 'teikiConfirm'])->name('teiki.confirm');
    Route::post('/teiki/thanks', [ContactController::class, 'teikiSend'])->name('teiki.thanks');
    Route::get('/teiki/thanks', [ContactController::class, 'toTop'])->name('teiki.toTop');

    Route::get('/akiu', function() {
        return view('contacts.akiu.index');
    })->name('contact.akiu');
    Route::post('/akiu/confirm', [ContactController::class, 'akiuConfirm'])->name('akiu.confirm');
    Route::post('/akiu/thanks', [ContactController::class, 'akiuSend'])->name('akiu.thanks');
    Route::get('/akiu/thanks', [ContactController::class, 'toTop'])->name('akiu.toTop');

    Route::get('/itaku', function() {
        return view('contacts.itaku.index');
    })->name('contact.itaku');
    Route::post('/itaku/confirm', [ContactController::class, 'itakuConfirm'])->name('itaku.confirm');
    Route::post('/itaku/thanks', [ContactController::class, 'itakuSend'])->name('itaku.thanks');
    Route::get('/itaku/thanks', [ContactController::class, 'toTop'])->name('itaku.toTop');
});

Route::get('/hiyoko', [HiyokoController::class, 'show'])->name('hiyoko');
Route::get('/hiyoko/edit', [HiyokoController::class, 'edit'])->middleware(['auth'])->name('hiyoko.edit');
Route::put('/hiyoko/update', [HiyokoController::class, 'update'])->middleware(['auth'])->name('hiyoko.update');
