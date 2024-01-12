<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
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

Route::get('/', [FrontController::class,'welcome'])->name('welcome');

// ANNUNCI
Route::get('/new/annuncoment',[AnnouncementController::class,'createAnnouncement'])->middleware('auth')->name('announcement.create');

Route::get('/all/announcements', [FrontController::class, 'all_announcements'])->name('all_announcements');

Route::get('/announcement/detail/{announcement}', [FrontController::class, 'detail'])->name('announcement_detail');

Route::get('/category/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
// FINE ANNUNCI

// HOME REVISORE
Route::get('/revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/announcement/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/rifiuta/announcemnt/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// DIVENTA REVISORE
Route::get('/richiesta/revisore', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

// RENDI REVISORE
Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

// RICERCA ANNUNCIO
Route::get('/ricerca/annuncio', [FrontController::class,'searchAnnouncements'])->name('announcements.search');

// CHI SIAMO
Route::get('/chisiamo', [FrontController::class,'chisiamo'])->name('chisiamo');
// CONTATTACI
Route::get('/contattaci',[FrontController::class,'contattaci'])->name('contattaci');
// LANGUEGE
Route::post('lingue{lang}', [FrontController::class, 'setLocale'])->name('setLocale');