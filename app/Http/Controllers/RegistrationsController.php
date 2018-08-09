<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Http\Requests\RegistrationRequest; 

class RegistrationsController extends Controller
{

	public function create()
	{

		return view('registrations.create');	

	}

	public function store(RegistrationRequest $request)
	{

		session()->flash('message', "Thanks for signing up!"); 
		

		$request->persist();

		return redirect()->home();
	}

}
