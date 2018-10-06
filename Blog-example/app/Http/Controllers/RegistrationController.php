<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(User $user)
    {
    	//Validate
    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'

    	]);

    	//Create and save
    	$user = User::create(request(['name', 'email', 'password']));


    	//Sign them in
    	auth()->login($user);
        //\Auth::login();
        //request()->input()  Helper functions
        //redirect
    	//return redirect("/");
        return redirect()->home();
        
    }
}
