<?php

use App\Http\Controllers\AdherentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'staff'], function () {
        Route::group(['middleware' => 'teacherOrAdminOrDev'], function () {
            Route::get('/adherent/other', [AdherentController::class, 'other'])->name('adherent.other');
            Route::resource('adherent', AdherentController::class);
            Route::get('/adherent/{id}/edit', [AdherentController::class, 'edit'])->name('adherent.edit');
            Route::get('/adherent/other', [AdherentController::class, 'other'])->name('adherent.other');
            Route::post('/adherents/updatePerPage', [AdherentController::class, 'updatePerPage'])->name('adherent.updatePerPage');
            Route::resource('teacher', TeacherController::class);
        });
    });
});
