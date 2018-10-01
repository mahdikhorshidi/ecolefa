<?php

namespace App\Http\Controllers\Dashboard;

use App\MOdels\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
        $school = auth()->user()->school;
        if(!isset($school->id)){
            return redirect(route('dashboard.school.create'));
        }
        return view('dashboard.school.index', compact('school'));
    }

    public function create()
    {
        $school = auth()->user()->school;
        if(isset($school->id)){
            return redirect(route('dashboard.school.edit'));
        }
        return view('dashboard.school.create');
    }

    public function store(Request $request)
    {
        $school = new School;
        return $this->update($request, $school);
    }

    public function edit()
    {
        $school = auth()->user()->school;
        if(!isset($school->id)){
            return redirect(route('dashboard.school.create'));
        }
        return view('dashboard.school.edit', compact('school'));
    }

    public function update(Request $request, School $school)
    {
        $request->merge(['user_id' => auth()->user()->id]);
        $inputs = $request->only('name', 'visible', 'user_id', 'domain');
        $school->fill($inputs)->save();
        return redirect('/dashboard/school');
    }

    public function destroy(School $school)
    {
        //
    }
}
