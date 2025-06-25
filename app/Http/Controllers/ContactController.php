<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;
class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:10',
    ]);

   Mail::to('admin@chessclub.com')->send(
        new ContactFormMail($validated)
    );

    return response()->json([
        'message' => 'Your message has been sent successfully!'
    ]);
}
}