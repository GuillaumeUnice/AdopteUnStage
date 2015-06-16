@extends('moderateur.layout')

@section('title')
    Validation des offres de stage
@endsection

@section('fil-ariane')
    @parent
    <li class="active" xmlns="http://www.w3.org/1999/html">Validation des offres de stage</li>
@endsection

@section('panel_ariane')
@endsection

@section('content')

    <br/>

    @include('generale.flash_message')

    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">Gérer mes publications de stage</span>
        </div>
    </div>
    <br/>

    @if($offres == null)
        <pre>Il n'existe aucune offre de stage à valider</pre>
    @endif

    @include('generale.carte_offre_template', [
        'offres'  => $offres,
        'boutons' => 'moderateur.boutons.validation_offres'
    ])


@endsection




