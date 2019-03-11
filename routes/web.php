<?php

/*
    Conventions:
    GET     /projects (index)
    GET     /projects/create (create)
    GET     /projects/1 (show)
    POST    /projects (store)
    GET     /projects/1/edit (edit)
    PATCH   /projects/1 (update)
    DELETE  /projects/1 (destroy)
*/


Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/create', function() {
   return view('create');
});

// The issues lies with conventions
//Route::resource('payments', 'PaymentsController');

Route::get('/payments/', 'PaymentsController@index');

Route::get('/payments/create', 'PaymentsController@create');

Route::get('/payments/payRequest', 'PaymentsController@payRequest');
Route::post('/pay', 'PaymentsController@pay');
