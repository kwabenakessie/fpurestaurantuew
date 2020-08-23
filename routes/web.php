<?php
use App\Reservation;
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


Route::get('/about-us2', function() {
    return view('about-us2');
});
Route::get('/blog-details', function() {
    return view('blog-details');
});
Route::get('/blog-gallery', function() {
    return view('blog-gallery');
});
Route::get('/blog', function() {
    return view('blog');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/event', function() {
    return view('event');
});
Route::get('/gallery', function() {
    return view('gallery');
});
Route::get('/menu-grid', function() {
    return view('menu-grid');
});
Route::get('/table', function() {
    return view('table');
});
Route::get('/reserve', function() {
    $reservations = Reservation::all();
    return view('reservations.index')->with('reservations', $reservations);
});
Route::resource('reservation', 'ReservationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
