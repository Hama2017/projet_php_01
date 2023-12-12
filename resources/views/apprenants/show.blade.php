@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de l'Apprenant</h2>
        <p><strong>Nom:</strong> {{ $apprenant->nom }}</p>
        <p><strong>Prénom:</strong> {{ $apprenant->prenom }}</p>
        <p><strong>Téléphone:</strong> {{ $apprenant->telephone }}</p>
        <p><strong>Matricule:</strong> {{ $apprenant->matricule }}</p>
        <a href="{{ url('/apprenants') }}" class="btn btn-secondary">Retour</a>
    </div>
@endsection
