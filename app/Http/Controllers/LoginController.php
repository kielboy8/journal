<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create() {
    	return view('login.create');
    }

    public function store() {
    	if (!auth()->attempt([
    		'email' => request('inputEmail'), 
    		'password' => request('inputPassword')])) {
			return back()->withErrors([
				'message' => 'Please check your credentials and try again.'
			]);
		}

		return redirect()->home();
    }

    public function destroy() {
    	auth()->logout();

    	return redirect()->home();
    }
}
