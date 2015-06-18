

@extends('moderateur.layout')

@section('title')
    Invitation étudiant
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Validation entreprises</li>
@endsection

@section('panel_ariane')
@endsection

@section('panel_content')

    @include('generale.form_notification')
    @include('generale.flash_message')

    <div class="historique__header">
        <div class="historique__header__title">
            @if($entreprises->first() == null)
                <span class="historique__header__title__span">Aucune entreprise à valider</span>
            @else
                <span class="historique__header__title__span">Valider les entreprises</span>
            @endif
        </div>
    </div>

        @include('generale.carte_entreprise_template', [
            'entreprises'  => $entreprises,
            'boutons' => 'moderateur.boutons.validation_entreprises'
        ])


@endsection




