<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // Send to sign up form
    public function create() {
        return view('user.signup');
    }

    public function store(Request $request) {

        $formFields = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // Log out from account
    public function logout(Request $request) {

        
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');


    }

    // Send to login form
    public function login() {
        return view('user.login');
    }

    // Log in account
    public function authentication(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Incorrect email or password']);
    }

}
