<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

//Routes de client
Route::get('clients','ClientController@index')->name('listeClient');
Route::get('AjoutClient','ClientController@create')->name('ajoutClient');
Route::get('profilClient','ClientController@show')->name('profilClient');


//Routes d'employé
Route::get('employes','EmployeController@index')->name('listeEmploye');
Route::get('AjoutEmploye','EmployeController@create')->name('ajoutEmploye');

//Routes de souscription
Route::get('souscription','SouscriptionController@index')->name('listeSouscription');
Route::get('AjoutSouscription','SouscriptionController@create')->name('ajoutSouscription');


//Routes de paiement
Route::get('paiement','PaiementController@index')->name('listePaiement');
Route::get('AjoutPaiement','PaiementController@create')->name('ajoutPaiement');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
