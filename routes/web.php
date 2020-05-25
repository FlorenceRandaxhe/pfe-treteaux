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

Route::get('/search', 'SearchController')->name('search');

Route::get('/', 'HomeController')
    ->template(\App\Nova\Templates\Home::class)
    ->name('home');

Route::get('/agenda/{season}', 'SeasonController')
    ->template(\App\Nova\Templates\Agenda::class)
    ->name('agenda');

Route::get('/agenda/{season}/{event}', 'SeasonController@show')
    ->name('singleEvent');

Route::get('/actualites', 'PostController')
    ->template(\App\Nova\Templates\Post::class)
    ->name('post');

Route::get('/actualites/{post}', 'PostController@show')
    ->name('singleNews');

Route::get('/presse-et-media', 'MediaController')
    ->template(\App\Nova\Templates\Media::class)
    ->name('media');

Route::get('/offre-resto', 'RestoController')
    ->template(\App\Nova\Templates\Resto::class)
    ->name('resto');

Route::get('/abonnements', 'SubscriptionController')
    ->template(\App\Nova\Templates\Subscription::class)
    ->name('subscription');

Route::get('/contact', 'ContactController@index')
    ->template(\App\Nova\Templates\Contact::class)
    ->name('contact');

Route::get('/la-salle', 'AboutController')
    ->template(\App\Nova\Templates\About::class)
    ->name('about');

Route::get('/location', 'RentingController@index')
    ->template(\App\Nova\Templates\Renting::class)
    ->name('renting');

Route::post('/contactForm', 'ContactController@submit')
        ->name('contactForm');

Route::post('/locationForm', 'RentingController@submit')
        ->name('rentingSubmit');

Route::post('/newsletter', 'NewsletterController@submit')
        ->name('newsletter');

Route::post('/newsletterFooter', 'NewsletterController@submitFooter')
        ->name('newsletterFooter');

Route::get('/rgpd', 'legalController@rgpd')
    ->template(\App\Nova\Templates\Rgpd::class)
    ->name('rgpd');

Route::get('/conditions-general-de-vente', 'LegalController@legal')
    ->template(\App\Nova\Templates\Legal::class)
    ->name('legal');


Route::get('/reservation/{event}', 'BookingController@category')
    ->name('booking');

Route::post('/category{event}', 'BookingController@chooseCategory')
    ->name('category');

Route::get('/placement/{event}', 'BookingController@seat')
    ->name('seating');

Route::post('/chooseSeats/{event}', 'BookingController@chooseSeats')
    ->name('chooseSeats');

Route::get('/panier/{event}', 'BookingController@cart')
    ->name('cart');

Route::post('/emptyCart/{event}', 'BookingController@emptyCart')
    ->name('emptyCart');

Route::get('/payment/{event}', 'BookingController@payment')
    ->name('payment');