@extends('entreprise.layout')

@section('title')
    Liste de offres de stages
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Offres Stages</li>
@endsection

@section('content')


    <br/>

    @include('generale.flash_message')

    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">Gérer mes publications de stage</span>
        </div>
        <div class="historique__header__add">
            <a href="{{ URL('entreprise/offre-stage/create') }}" class="btn-float-action btn-green">+</a>
        </div>
    </div>

    <br/>

    @include('generale.carte_offre_template', [
        'offres'  => $offres,
        'boutons' => 'entreprise.boutons.gestion_offres'
    ])

@endsection