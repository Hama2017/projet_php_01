<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenants.index', ['apprenants' => $apprenants]);
    }

    public function create()
    {
        return view('apprenants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'telephone' => 'required',
        ]);

        Apprenant::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'matricule' => $request->input('matricule'),
            'telephone' => $request->input('telephone'),
        ]);

        return redirect('/apprenants')->with('success', 'Apprenant ajouté avec succès!');
    }

    public function show(Apprenant $apprenant)
    {
        return view('apprenants.show', ['apprenant' => $apprenant]);
    }

    public function edit(Apprenant $apprenant)
    {
        return view('apprenants.edit', ['apprenant' => $apprenant]);
    }

    public function update(Request $request, Apprenant $apprenant)
    {
        // Validez les données du formulaire ici

        $apprenant->update($request->all());

        return redirect('/apprenants');
    }

    public function destroy(Apprenant $apprenant)
    {
        $apprenant->delete();
        return redirect('/apprenants');
    }
}

