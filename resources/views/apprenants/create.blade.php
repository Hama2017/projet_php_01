@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Apprenant</h2>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/apprenants') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" id="matricule" name="matricule" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
