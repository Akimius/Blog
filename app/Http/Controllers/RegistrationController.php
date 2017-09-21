<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);

        // Create and save the user
        $user = User::create(request(['name', 'email', 'password']));

        // Signed in user
        auth()->login($user);


        // Redirect to some special page of home page  return redirect('/');

        return redirect()->home();

    }
}
