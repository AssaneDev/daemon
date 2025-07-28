<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bref;
use App\Mail\BriefRequestMail;
use Illuminate\Support\Facades\Mail;

class BriefController extends Controller
{
    //


public function submit(Request $request)
{
    $validated = $request->validate([
        'ecole' => 'required|string',
        'responsable' => 'required|string',
        'telephone' => 'required|string',
        'email' => 'required|email',
        'objectif' => 'required|string',
        'historique' => 'nullable|string',
        'besoins' => 'required|string',
        'delai' => 'nullable|string',
    ]);

    $brief = Bref::create($validated);

    Mail::to(config('mail.admin_address'))->send(new BriefRequestMail($brief));
    Mail::to($brief->email)->send(new BriefRequestMail($brief));

    // return redirect()->route('brief.merci')->with('brief_data', $brief);
    return view('school.brief_merci', compact('brief'));

}

public function merci()
{
    $brief = session('brief_data');
    if (!$brief) return redirect('/');

   return redirect()->route('brief.confirmation')->with('brief', $brief);

}

}
