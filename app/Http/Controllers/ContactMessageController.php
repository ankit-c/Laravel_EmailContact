<?php

namespace Bitcoin\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\ContactEmail as ContactEmail;
class ContactMessageController extends Controller
{
    public function create()
    {
      return view('pages.contact');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
  			'fullname' => 'required',
  			'email' => 'required|email',
  			'uname' => 'required',
  			'address1' => 'required',
  			'address2' => 'required',
  			'city' => 'required',
  			'state' => 'required',
  			'country' => 'required',
  			'zip' => 'required'
  			]);

        Mail::send('emails.contact', [
          'msgName' => $request->fullname,
          'msgEmail' => $request->email,
          'msgUname' => $request->uname,
          'msgAddress1' => $request->address1,
          'msgAddress2' => $request->address2,
          'msgCity' => $request->city,
          'msgState' => $request->state,
          'msgCountry' => $request->country,
          'msgZip' => $request->zip
        ], function($mail) use($request) {
          $mail->from($request->email, $request->name);

          $mail->to('ankye20@gmail.com')->subject('New Contact Info');
        });

        


        return redirect('/contact')->with('flash_message', 'Thank You');
    }
}
