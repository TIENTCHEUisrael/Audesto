<?php

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.welcome');
    Route::get('/home', 'HomeController@index')->name('home.welcome');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
    /**
     * Customer routes
     */
    Route::get('Client/dashboard', 'ClientController@dashboard')->name('client.dashboard');

    Route::get('Client/reservation', 'ClientController@reservation')->name('client.reservation');
    Route::post('Client/reservation', 'ClientController@savereservation')->name('client.savereservation');

    Route::get('Client/profile', 'ClientController@profile')->name('client.profile');
    Route::post('Client/profile', 'ClientController@saveprofile')->name('client.saveprofile');



    Route::get('Client/faq', 'ClientController@faq')->name('client.faq');
    Route::get('Client/garage', 'ClientController@garage')->name('client.garage');

    Route::get('Client/contact', 'ClientController@contact')->name('client.contact');
    Route::post('Client/contact', 'ClientController@savecontact')->name('client.savecontact');

    /*Route::prefix('Client')->group(function(){
        Route::get('/register', [ClientController::class, 'register'])->name('register');
        Route::post('/register', [ClientController::class, 'store'])->name('client.store');
        Route::post('/connexion', [ClientController::class, 'connected'])->name('HasConnected');
        Route::post('/preoccupation', [ClientController::class, 'probleme'])->name('preoccupation');
    });*/
});
