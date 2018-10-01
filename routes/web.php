<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::domain('{domain}.{tld}')->group(base_path('routes/schools.php'), function ($domain,$tld)
{
    dd($domain);
    $domain = $domain.'.'.$tld;
    if ($domain == 'ecolefa.test')
        return view('welcome');
    $school = School::where('domain', $domain)->first();
});