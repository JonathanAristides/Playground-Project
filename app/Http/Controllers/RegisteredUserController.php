<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:255', 'unique:users, email'],
            'password' => ['required', 'confirmed', Password::min(4)],
        ]);

        $employerAttributes = $request->validate([
            'company' => 'required',
            'logo' => ['required', File::types('png', 'jpg', 'jpeg')],
        ]);


        $user = User::create($userAttributes);
        $logoPath = $request->logo->store('logos', 'public');


        $user->employer()->create([
            'name' => $employerAttributes['company'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/job-board');
    }
}
