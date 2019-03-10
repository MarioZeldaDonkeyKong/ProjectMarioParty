<?php

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/payRequest', 'PaymentController@payRequest');

Route::post('/pay', 'PaymentController@pay');


// Projects Controller, Tasks Controller, Users Controller 
