

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

    <h3>Validation des entreprises</h3><br/>


    @if($entreprises->first() == null)

        <pre>Aucune entreprise à valider</pre>

    @else

        @include('generale.carte_entreprise_template', [
            'entreprises'  => $entreprises,
            'boutons' => 'moderateur.boutons.validation_entreprises'
        ])

    @endif


@endsection




