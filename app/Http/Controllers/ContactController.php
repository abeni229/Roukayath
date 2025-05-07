<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   

    // Traite le formulaire de contact
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Tu peux stocker ou envoyer le message ici (mail, DB, etc.)
        // Exemple : juste afficher un message de confirmation

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
