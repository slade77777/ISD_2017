<?php
Route::get('/', 'UserController@show')
    ->name('frontend.user.dashboard');
Route::get('/login', 'UserController@login')
    ->name('frontend.user.login');
Route::post('/login', 'UserController@loginAs')
    ->name('frontend.user.loginAs');