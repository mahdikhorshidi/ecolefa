<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::paginate(20);
        return view('dashboard.admin.schools.index', compact('schools'));
    }

    public function create()
    {
        return view('dashboard.admin.schools.create');
    }

    public function store(Request $request)
    {
        $school = new School;
        return $this->update($request, $school);
    }

    public function show(School $school)
    {
        return view('dashboard.admin.schools.show', compact('school'));
    }

    public function edit(School $school)
    {
        return view('dashboard.admin.schools.edit', compact('school'));
    }

    public function update(Request $request, School $school)
    {
        $inputs = $request->only('name', 'visible', 'user_id');
        $school->create($inputs);
        return redirect('/dashboard/admin/schools');
    }

    public function destroy(School $school)
    {
        //
    }
}
