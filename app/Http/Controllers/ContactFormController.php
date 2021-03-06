<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    
	public function create(){

		return view('contact.create');
	}

	public function store(){

		$data = request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
		]);

		//send mail
		Mail::to('test@test.com')->send(new ContactFormMail($data));

		//session()->flash('message', 'Tu mensaje se ha enviado. Nos pondremos en contacto a la brevedad.');

		return redirect('contact')->with('message', 'Tu mensaje se ha enviado. Nos pondremos en contacto a la brevedad.');
	}

}
