<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
    	return view('register.create');
    }

    public function store() {
    	$this->validate(request(), [
    		'inputName' => 'required',
    		'inputEmail' => 'required|email',
    		'inputPassword' => 'required|confirmed'
    	]);

    	$user = User::create([
            'name' => request('inputName'), 
            'email' => request('inputEmail'), 
            'password' => bcrypt(request('inputPassword')) 
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}
