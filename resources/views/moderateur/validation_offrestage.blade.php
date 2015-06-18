@extends('moderateur.layout')

@section('title')
    Validation des offres de stage
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/offre_specialites.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
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
            @if($offres->first() == null)
                <span class="historique__header__title__span">Aucune offre de stage à valider</span>
            @else
                <span class="historique__header__title__span">Valider les offres de stage</span>
            @endif
        </div>
    </div>
    <br/>



    @include('generale.carte_offre_template', [
        'offres'  => $offres,
        'specialites' => $specialites,
        'boutons' => 'moderateur.boutons.validation_offres',
        'validation' => 'moderateur.validation_offrestage_specialites'
    ])


@endsection

@section('script_js')
    <script src="{{asset('js/libraries/select2.js')}}"></script>
    <script src="{{asset('js/specialites_valider_historique.js')}}"></script>
@endsection




