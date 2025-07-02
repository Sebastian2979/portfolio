<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw(
            "Name: {$validated['name']}\nE-Mail: {$validated['email']}\n\n{$validated['message']}",
            function ($message) use ($validated) {
                $message->to('contact@pumo.digital')
                    ->subject('Nachricht vom Kontaktformular')
                    ->replyTo($validated['email'], $validated['name']);
            }
        );

        return back()->with('success', 'Danke für deine Nachricht!');
    }
}