<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $profile = $user->profile;
        if(!isset($profile->id)){
            return redirect(route('dashboard.profile.create'));
        }
        return view('dashboard.profile.index', compact('profile', 'user'));
    }

    public function create()
    {
        $profile = auth()->user()->profile;
        if(isset($profile->id)){
            return redirect(route('dashboard.profile.edit'));
        }
        return view('dashboard.profile.create');
    }

    public function store(Request $request)
    {
        $profile = new Profile;
        return $this->update($request, $profile);
    }

    public function edit()
    {
        $profile = auth()->user()->profile;
        if(!isset($profile->id)){
            return redirect(route('dashboard.profile.create'));
        }
        return view('dashboard.profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->merge(['user_id' => auth()->user()->id]);
        $inputs = $request->only('gender', 'meli', 'mobile', 'user_id');
        $profile->create($inputs);
        return redirect('/dashboard/profile');
    }
}
