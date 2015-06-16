@extends('template_panel')

@section('title')
    Panel étudiant
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/libraries/isteven-multi-select.css') }}">
@endsection
@section('fil-ariane')
    <li><a href="{{ url(route('accueil-etudiant')) }}"> Panel étudiant </a></li>
@endsection

@section('content')
    <div  ng-app="EtudiantApp">
        <div ng-view>
            @yield('panel_content')
        </div>
    </div>
@endsection

@section('menu')

    <li class="{{ (Request::url() == url(route('accueil-etudiant'))) ? 'active':'' }}">
        <a href="{{ url(route('accueil-etudiant')) }}"> Accueil</a>
    </li>

    <li class="{{ (Request::url() == url(route('profil-etudiant'))) ? 'active':'' }}">
        <a href="{{ url(route('profil-etudiant')) }}">Gestion du profil</a>
    </li>

    <li class="{{ (Request::url() == url(route('competence-etudiant'))) ? 'active':'' }}">
        <a href="{{ url(route('competence-etudiant')) }}">Gestion des compétences</a>
    </li>

    <li class="{{ (Request::url() == url(route('cv-etudiant'))) ? 'active':'' }}">
        <a href="{{ url(route('cv-etudiant')) }}">Gestion de mon CV</a>
    </li>

    <li class="{{ (Request::url() == url(route('historique-feedback'))) ? 'active':'' }}">
        <a href="{{ url(route('historique-feedback')) }}">Historique de mes stages</a>
    </li>

    <li class="{{ (Request::url() == url(route('offre-stage-etudiant'))) ? 'active':'' }}">
        <a href="{{ url(route('offre-stage-etudiant')) }}">Validation offre de stage</a>
    </li>

    <li class="{{ (Request::url() == url(route('racine-etudiant'))) ? 'active':'' }}">
        <a href="{{ url('etudiant#/recherche-stage') }}">Recherche Stage</a>
    </li>
@endsection

@section('script_js')
    <script src="{{ asset('js/angular/directives/dirPagination.js') }}"></script>
    <script src="{{ asset('js/angular/directives/isteven-multi-select.js') }}"></script>

    <script src="{{ asset('js/angular/etudiantApp.js') }}"></script>
    <script src="{{ asset('js/angular/services/rechercheStage.js') }}"></script>
    <script src="{{ asset('js/angular/controllers/rechercheStage.js') }}"></script>

    <script src="{{ asset('js/angular/filters/customSpecialiteFilter.js') }}"></script>
    <script src="{{ asset('js/angular/filters/customCompetenceFilter.js') }}"></script>
@endsection
