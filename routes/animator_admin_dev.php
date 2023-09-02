<?php

use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\KidController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'staff'], function () {
        Route::group(['middleware' => 'animatorOrAdminOrDev'], function () {
            Route::resource('kid', KidController::class);
            Route::get('/participatedkids/{id}', [EntertainmentController::class, 'participatedKids'])->name('entertainment.participatedKids');
            Route::post('/entertainments', 'EntertainmentController@store')->name('entertainments.store');
        });
    });
});
