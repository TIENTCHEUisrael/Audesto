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
        Route::post('/alogin', 'LoginController@login')->name('login.adminlogin');
        Route::get('/alogin', 'LoginController@adshow')->name('login.adshow');

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

    Route::post('Client/password', 'PasswordController@uppassword')->name('password.uppassword');

    Route::get('Client/reservation', 'ClientController@reservation')->name('client.reservation');
    Route::post('Client/reservation', 'ClientController@savereservation')->name('client.savereservation');
    Route::post('Client/postreservation', 'ReservationController@savereservation')->name('reservation.savereservation');

    Route::get('Client/profile', 'ClientController@profile')->name('client.profile');
    Route::post('Client/profile', 'ClientController@saveprofile')->name('client.saveprofile');



    Route::get('Client/faq', 'ClientController@faq')->name('client.faq');
    Route::get('Client/garage', 'ClientController@garage')->name('client.garage');

    Route::get('Client/contact', 'ClientController@contact')->name('client.contact');
    Route::post('Client/contact', 'ClientController@savecontact')->name('client.savecontact');
    Route::post('Client/savresponse', 'ClientController@savresponse')->name('client.savresponse');



    /**
     * Administrateur routes
     */
    Route::get('/Administrateur/login', 'LoginController@administrateur')->name('login.administrateur');
    Route::get('/Administrateur/userlist', 'AdministrateurController@userlist')->name('administrateur.userlist');
    Route::get('/Administrateur/userdetail/{id}', 'AdministrateurController@userdetail')->name('administrateur.userdetail');
    Route::get('/Administrateur/dashboard', 'AdministrateurController@dashboard')->name('administrateur.dashboard');
    Route::get('/Administrateur/listmodel', 'AdministrateurController@listmodel')->name('administrateur.listmodel');
    Route::get('/Administrateur/detailmodel/{id}', 'AdministrateurController@detailmodel')->name('administrateur.detailmodel');
    Route::get('/Administrateur/listcar', 'AdministrateurController@listcar')->name('administrateur.listcar');
    Route::get('/Administrateur/cardetail/{id}', 'AdministrateurController@cardetail')->name('administrateur.cardetail');
    Route::get('Administrateur/reservation', 'AdministrateurController@reservation')->name('Administrateur.reservation');
    Route::get('Administrateur/reservationdetail/{id}', 'AdministrateurController@reservationdetail')->name('Administrateur.reservationdetail');
    Route::get('Administrateur/profile', 'AdministrateurController@profile')->name('Administrateur.profile');
    Route::get('Administrateur/message', 'AdministrateurController@message')->name('administrateur.message');
    Route::get('Administrateur/messagedetail/{id}', 'AdministrateurController@messagedetail')->name('administrateur.messagedetail');
    Route::get('Administrateur/addcar', 'AdministrateurController@addcar')->name('Administrateur.addcar');
    Route::get('Administrateur/agence', 'AdministrateurController@agence')->name('Administrateur.agence');

    Route::post('Administrateur/savmessage', 'AdministrateurController@savmessage')->name('administrateur.savmessage');
    Route::post('Administrateur/profile', 'AdministrateurController@saveprofile')->name('administrateur.saveprofile');
    Route::post('Administrateur/savereservation', 'AdministrateurController@savereservation')->name('Administrateur.savereservation');
    Route::post('Administrateur/updatereservation', 'AdministrateurController@updatereservation')->name('Administrateur.updatereservation');
    Route::post('Administrateur/detailreservation', 'AdministrateurController@detailreservation')->name('Administrateur.detailreservation');
    Route::post('Administrateur/updatemodel', 'AdministrateurController@updatemodel')->name('Administrateur.updatemodel');
    Route::post('Administrateur/deletecar', 'AdministrateurController@deletecar')->name('Administrateur.deletecar');
    Route::post('Administrateur/updatecar', 'AdministrateurController@updatecar')->name('Administrateur.updatecar');
    Route::post('Administrateur/deletemodel', 'AdministrateurController@deletemodel')->name('Administrateur.deletemodel');
    Route::post('Administrateur/addmodel', 'AdministrateurController@addmodel')->name('Administrateur.addmodel');
    Route::post('Administrateur/smessage', 'AdministrateurController@smessage')->name('administrateur.smessage');
    Route::post('Administrateur/savecontact', 'AdministrateurController@savecontact')->name('Administrateur.savecontact');
    Route::post('Administrateur/savecar', 'AdministrateurController@savecar')->name('Administrateur.savecar');
    Route::post('Administrateur/password', 'AdministrateurController@password')->name('Administrateur.password');
    Route::post('Administrateur/saveagence', 'AdministrateurController@saveagence')->name('Administrateur.saveagence');



    // Route::post('Administrateur/postreservation', 'ReservationController@savereservation')->name('reservation.savereservation');
    // Route::post('Administrateur/postmodel', 'ReservationController@addmodel')->name('reservation.addmodel');
    // Route::post('Administrateur/addcar', 'ReservationController@addcar')->name('reservation.addcar');


    // Route::get('Administrateur/messages', 'AdministrateurController@contact')->name('Administrateur.contact');
    // Route::post('Administrateur/messages', 'AdministrateurController@savecontact')->name('Administrateur.savecontact');

});
