@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier l'Apprenant</h2>
        <form action="{{ url('/apprenants/'.$apprenant->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $apprenant->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $apprenant->prenom }}" required>
            </div>
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" id="matricule" name="matricule" value="{{ $apprenant->matricule }}" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $apprenant->telephone }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ url('/apprenants') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
@endsection
