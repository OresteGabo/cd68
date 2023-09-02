<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AgeGapController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeTypeController;
use App\Http\Controllers\LegalSituationController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\StudyLevelController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\PromptController;
use App\Http\Controllers\KidEntertainmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::resource('prompt',PromptController::class);

Route::post('/request', 'RequestController@store')->name('request.store');
/*Route::post('/kid/{id}', [KidEntertainmentController::class])->name('kid_entertainment.store');*/
Route::resource('kid_entertainment', KidEntertainmentController::class);
Route::resource('entertainment', EntertainmentController::class);
Route::resource('prompt',PromptController::class);

Route::group(['middleware' => 'auth'], function (){
    Route::get('/staffsite', [DashboardController::class, 'staffsite'])->name('staffsite.index');
    Route::get('/bugreport', [DashboardController::class, 'bugReport'])->name('staffsite.bugreport');



    Route::resource('user',UserController::class);
    Route::resource('home',HomeController::class);

    Route::resource('activity',ActivityController::class);
    Route::resource('city',CityController::class);
    Route::resource('incometype',IncomeTypeController::class);
    Route::resource('legalsituation',LegalSituationController::class);
    Route::resource('maritalstatus',MaritalStatusController::class);
    Route::resource('paymentmethod',PaymentMethodController::class);
    Route::resource('country',CountryController::class);
    Route::resource('studylevel',StudyLevelController::class);




    //All the authentified users
    Route::get('/profile', function (){
        return "Hi";
    });









    //All the active staff Members
    Route::group(['middleware'=>'staff'],function(){

        Route::resource('payment',PaymentController::class);




        Route::get('/settings',function(){
            return "THs is a setting page protected buy is staff middleware" ;
        });
        Route::group(['middleware'=>'admin'],function(){
            Route::get('/adminpanel',function(){
                return "THs is a admin middleware panel" ;
            });
            Route::resource('agegap',AgeGapController::class);
        });
        Route::group(['middleware'=>'teacher'],function(){
            Route::get('/teacherpanel',function(){
                return "THs is a teacher middleware panel" ;
            });
        });
        Route::group(['middleware'=>'animator'],function(){
            Route::get('/animatorpanel',function(){
                return "THs is a animator middleware panel" ;
            });
        });
        Route::group(['middleware'=>'editor'],function(){
            Route::get('/editorpanel',function(){
                return "THs is a editor middleware panel" ;
            });
        });
        Route::group(['middleware'=>'intern'],function(){
            Route::get('/internpanel',function(){
                return "THs is a intern middleware panel" ;
            });
        });


    });
});



require __DIR__.'/formation.php';
require __DIR__.'/animator_admin_dev.php';
require __DIR__.'/admin_dev.php';
require __DIR__.'/editor_admin_dev.php';
require __DIR__.'/teacher_admin_dev.php';
