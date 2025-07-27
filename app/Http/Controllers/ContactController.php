<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function submit(Request $request)
{
    $validated = $request->validate([
        'prenom' => 'required|string',
        'nom' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'nullable|string',
        'offre' => 'required|string',
        'message' => 'nullable|string',
    ]);

    $contact = Contact::create($validated);

    Mail::to(config('mail.admin_address'))->send(new ContactRequestMail($contact));
    Mail::to($contact->email)->send(new ContactRequestMail($contact));

    return back()->with('success', 'Votre demande a bien été envoyée !');
}
}
