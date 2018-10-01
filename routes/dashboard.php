<?php

Route::resource('school', 'SchoolController')->only([
    'index', 'create', 'store', 'update', 'destroy'
]);
Route::get('school/edit', 'SchoolController@edit')->name('school.edit');
Route::resource('profile', 'ProfileController')->only([
    'index', 'create', 'store', 'update'
]);
Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');

Route::prefix('admin')
    ->middleware(['web', 'auth'])
    ->name('admin.')
    ->namespace('Admin')
    ->group(function (){
        Route::resource('users', 'UserController');
        Route::resource('schools', 'SchoolController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
    });