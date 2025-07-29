<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bref;
use App\Mail\BriefRequestMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormulaireEnseignantMail;


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
public function Diarama(){
    return view('school.diarama');
 }

 public function store(Request $request)
{
    $data = $request->validate([
        'nom' => 'required|string',
        'etablissement' => 'required|string',
        'fonction' => 'required|string',
        'experience' => 'nullable|numeric',
        'niveau' => 'nullable|array',
        'equipement' => 'nullable|array',
        'logiciels' => 'nullable|array',
        'besoins' => 'nullable|array',
        'objectifs' => 'nullable|string',
        'projet' => 'nullable|string',
        'type_projet' => 'nullable|string',
        'disponibilites' => 'nullable|string',
    ]);

    Mail::to('ton-email@exemple.com')->send(new FormulaireEnseignantMail($data));

    return response()->json(['message' => 'Formulaire envoyé avec succès !']);
}
}
