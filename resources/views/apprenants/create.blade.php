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
                @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" id="nom" name="nom" >
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                @error('prenom')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" id="prenom" name="prenom" >
            </div>
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" id="matricule" name="matricule" >
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                @error('telephone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" id="telephone" name="telephone" >
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
