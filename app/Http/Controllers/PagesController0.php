<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Ankit';
		$last = 'C';

		$fullname = $first . " " . $last;
		$email = 'ankye20@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'fullname' => 'required|text',
			'email' => 'required|email',
			'uname' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'city' => 'required',
			'state' => 'required',
			'country' => 'required',
			'zip' => 'required',
			]);

		$data = array(
			'fullname' => $request->fullname,
			'email' => $request->email,
			'uname' => $request->uname,
			'address1' => $request->address1,
			'address2' => $request->address2,
			'city' => $request->city,
			'state' => $request->state,
			'country' => $request->country,
			'zip' => $request->zip,

			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('ankye20@gmail.com');
			$message->subject($data['New Contact Details']);
			// $message->message($data['fullname','email','uname','address1','address2','city','state','country','zip']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}


}
