@extends('etudiant.layout')

@section('title')
    Accueil
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/forms/switch.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/home/student.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Accueil</li>
@endsection

@section('content')
    @include('generale.form_notification')
    @include('generale.flash_message')

    <div class="home__head">
        <div class="home__search">
            <div class="switch">
                {!! Form::open(['route' => ['accueil-recherche'], 'class' => 'form-inline', 'id' => 'recherche', 'method' => 'post']) !!}
                    <input onclick="document.getElementById('recherche').submit();"
                           class="home__search__switch" type="checkbox" id="switch" {{ ($recherche)?'checked':'' }}/>
                    <label for="switch" class="label"></label>
                    <span class="home__search__switch__message"></span>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="home__content">
        <div class="home__moderateurs">

            <h2>Modérateurs responsables de ma promotion</h2>


            @if($responsables->first() == null)
                <div class="alert alert-info">Il n'y a aucun responsable pour votre promotion et/ou vous n'avez pas encore définis votre promotion.</div>
            @endif

            @include('generale.carte_user_template', [
                'users'  => $responsables,
                'boutons' => 'etudiant.boutons.contact_moderateur'
            ])

        </div>

        <br/>

        <div class="home__suggestions">

            <h2>Ces offres pourraient vous intéresser..</h2>

            @include('generale.carte_offre_template', [
                'offres'  => $suggestions,
                'boutons' => 'etudiant.boutons.liste_suggestions'
            ])

        </div>
    </div>


@endsection