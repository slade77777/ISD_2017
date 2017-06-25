<?php
Route::get('/adminDashboard', 'UserController@show')
    ->name('backend.admin.dashboard');