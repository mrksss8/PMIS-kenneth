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

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

///


Route::get('/patient/create', 'PatientController@create')->name('patient.create');
Route::post('/patient/store', 'PatientController@store')->name('patient.store');
Route::get('/patient/index', 'PatientController@index')->name('patient.index');
Route::get('/patient/show/{id}', 'PatientController@show')->name('patient.show');



Route::get('/medicine/create', 'MedicineController@create')->name('medicine.create');
Route::post('/medicine/store', 'MedicineController@store')->name('medicine.store');
Route::get('/medicine/index', 'MedicineController@index')->name('medicine.index');

