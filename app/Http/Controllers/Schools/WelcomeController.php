<?php

namespace App\Http\Controllers\Schools;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index($domain,$tld){
        $domain = $domain.'.'.$tld;
        if ($domain == 'ecolefa.test')
            return view('welcome');
        $school = School::where('domain', $domain)->first();
        return view('schools/welcome', compact('school'));
    }
}
