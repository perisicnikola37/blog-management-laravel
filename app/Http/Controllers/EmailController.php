<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to(['5dzoni5@gmail.com'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
