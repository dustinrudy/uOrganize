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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');


/*
    GET /events (index)
    GET /events/create (create)
    GET /events/1 (show)
    POST /events (store)
    GET /events/1/edit (edit)
    PATCH /events/1 (update)
    DELETE /events/1 (destroy)

*/

Route::resource('events', 'EventsController')->middleware('auth');

Route::post('/events/{event}/tasks', 'EventTasksController@store');

Route::patch('/tasks/{task}', 'EventTasksController@update')->middleware('auth');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
