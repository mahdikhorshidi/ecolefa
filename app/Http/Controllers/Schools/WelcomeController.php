<?php

namespace App\Http\Controllers\Schools;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Schools\BaseController;

class WelcomeController extends BaseController
{
    public function index() {
            return view('schools/welcome', compact('school'));
    }
}
