@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Matieres</h2>
        <a href="{{ route('add-new-student') }}" class="btn btn-success mb-3">Ajouter une Matiere</a>

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
                    @foreach($subject as $subjects)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->nom }}</td>
                            <td>{{ $subject->prenom }}</td>
                            <td>{{ $subject->matricule }}</td>
                            <td>{{ $subject->telephone }}</td>
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
            <p>Aucune matiére disponible pour le moment.</p>
        @endif
    </div>
@endsection
