<?php


use App\Http\Controllers\GenderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\YearController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'dev'],function(){
    Route::get('/devpanel',function(){
        return "THs is a dev middleware panel" ;
    });
    Route::resource('gender',GenderController::class);
    Route::resource('year',YearController::class);
    Route::resource('group',GroupController::class);
});
