@extends('etudiant.layout')

@section('title')
    Historique
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Historique</li>
@endsection

@section('content')

    <br/>

    @include('generale.flash_message')
    @include('generale.form_notification')


    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">Mon historique</span>
        </div>
    </div>
    <br/>

    @if($stages == null)
        <div class="alert alert-info">Vous n'avez été candidat sur aucune de nos offres à ce jour</div>
    @endif

    @include('generale.carte_offre_template', [
        'offres'  => $stages,
        'valide_info' => $valide_info,
        'boutons' => 'etudiant.boutons.historique_offres'
    ])

@endsection
