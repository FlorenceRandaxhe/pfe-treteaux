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

Route::get('/', 'HomeController')->name('home');
Route::get('/agenda/{season}', 'SeasonController');
Route::get('/actualités', 'PostController')->name('news');
Route::get('/actualités/{post}', 'PostController@show')->name('singleNews');
Route::get('/presse-et-media', 'MediaController')->name('media');
Route::get('/offre-resto', 'RestoController')->name('resto');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contactForm', 'ContactController@submit')->name('contactForm');
Route::get('/la-salle', 'AboutController')->name('about');
Route::get('/location', 'RentingController@index')->name('renting');
Route::post('/locationForm', 'RentingController@submit')->name('rentingSubmit');
Route::post('/newsletter', 'NewsletterController')->name('newsletter');
