<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'staff'], function () {
        Route::group(['middleware' => 'adminOrDev'], function () {
            Route::resource('dashboard', DashboardController::class);
            Route::get('/dashboard/user/edit/{id}', [DashboardController::class, 'userRoleEdit'])->name('userrole.edit');
            Route::put('/dashboard/user/{id}', [DashboardController::class, 'userRoleUpdate'])->name('userrole.update');
        });
    });
});
