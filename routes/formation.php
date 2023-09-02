<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/sdb/', [FormationController::class, 'index'])->name('sdb');
Route::get('/sdb/flyers', [FormationController::class, 'sdbFlyer'])->name('sdb.flyers');
Route::get('/sdb/session1', [FormationController::class, 'sdbSession1'])->name('sdb.s1');
Route::get('/sdb/session2', [FormationController::class, 'sdbSession2'])->name('sdb.s2');

Route::get('/informatique/excel', [FormationController::class, 'excel'])->name('informatique.excel');
Route::get('/informatique/email', [FormationController::class, 'email'])->name('informatique.email');
Route::get('/informatique/word', [FormationController::class, 'word'])->name('informatique.word');

Route::get('/linguistique/a1', [FormationController::class, 'linguistiqueA1'])->name('linguistique.a1');
Route::get('/linguistique/a2', [FormationController::class, 'linguistiqueA2'])->name('linguistique.a2');
Route::get('/linguistique/b1', [FormationController::class, 'linguistiqueB1'])->name('linguistique.b1');
Route::get('/linguistique/b2', [FormationController::class, 'linguistiqueB2'])->name('linguistique.b2');
Route::get('/linguistique/le1', [FormationController::class, 'linguistiqueLE1'])->name('linguistique.le1');
Route::get('/linguistique/le2', [FormationController::class, 'linguistiqueLE2'])->name('linguistique.le2');
Route::get('/mesure', [FormationController::class, 'mesure'])->name('mesure');
Route::get('/pourparler', [FormationController::class, 'pourParler'])->name('pourparler');


//Route::resource('formation',FormationController::class);
Route::resource('/',FormationController::class);
Route::get('/', function () {
    return view('formation.index');
})->name('formation.index');

