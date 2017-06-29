<?php

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

Route::get('newsletter-subscribers', 'NewsletterSubscriberController@index')->name('newsletter-subscribers.index');
Route::post('newsletter-subscribers', 'NewsletterSubscriberController@store')->name('newsletter-subscribers.store');
Route::get('newsletter-subscribers/confirm/{token}', 'NewsletterSubscriberController@confirm')->name('newsletter-subscribers.confirm');

Route::get('newsletters', 'NewsletterController@index')->name('newsletters.index');
Route::get('newsletters/new', 'NewsletterController@create')->name('newsletters.create');
Route::post('newsletters', 'NewsletterController@store')->name('newsletters.store');
Route::get('newsletters/{slug}/{id}', 'NewsletterController@show')->name('newsletters.show');
Route::post('newsletters/{slug}/{id}/send', 'NewsletterController@send')->name('newsletters.send');

