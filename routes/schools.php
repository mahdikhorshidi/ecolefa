<?php

 Route::get('/', 'WelcomeController@index');
// Route::get('/', function (\App\Models\School $school,$domain,$tld = null) {
//     if (!isset($school->name)) {
//         $school = \App\Models\School::where('domain', $domain . '.' . $tld)->first();
//     }
//     if (!isset($school->name)) {
//         abort(404);
//     }
//     return view('schools/welcome', compact('school'));
// });
// Route::get('/', function () {

//     return \App\Models\School::school()->first();
// });