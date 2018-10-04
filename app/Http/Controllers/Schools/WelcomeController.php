<?php

namespace App\Http\Controllers\Schools;

use Session;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index() {
        $school = Session::get('school');
            return view('schools/welcome', compact('school'));
    }
}
