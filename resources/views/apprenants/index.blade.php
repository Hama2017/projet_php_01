@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Apprenants</h2>
        <a href="{{ route('add-new-student') }}" class="btn btn-success mb-3">Ajouter un Apprenant</a>

        @if(count($apprenants) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matricule</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apprenants as $apprenant)
                        <tr>
                            <td>{{ $apprenant->id }}</td>
                            <td>{{ $apprenant->nom }}</td>
                            <td>{{ $apprenant->prenom }}</td>
                            <td>{{ $apprenant->matricule }}</td>
                            <td>{{ $apprenant->telephone }}</td>
                            <td>
                                <a href="{{ url('/apprenants/'.$apprenant->id) }}" class="btn btn-info">Afficher</a>
                                <a href="{{ url('/apprenants/'.$apprenant->id.'/edit') }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ url('/apprenants/'.$apprenant->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun apprenant disponible pour le moment.</p>
        @endif
    </div>
@endsection
