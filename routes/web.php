<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');
});

Route::group(['middleware' => 'auth'], function () {

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    //Para CRUD
    // Rota Usuarios
    //  Rota Usuarios
    Route::resource('usuario','UsersController');


    // Rota Niveis
    //  Rota Niveis
    Route::resource('nivel','NivelController');

    //  Rota Ticket
    Route::resource('ticket','TicketController');

//        //  Rota Ticket_busca
//    Route::resource('ticket_search','TicketController');
//
//        //  Rota Ticket_todos
//    Route::resource('ticket_all','TicketController');
//
//        //  Rota Ticket_meus
//    Route::resource('ticket_my','TicketController');
//
//        //  Rota Ticket_grupo
//    Route::resource('ticket_group','TicketController');

    //  Rota_relatorios
    Route::resource('relatorios','RelatoriosController');


});
