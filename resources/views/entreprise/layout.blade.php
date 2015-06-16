@extends('template_panel')

@section('title')
    Panel Entreprise
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/libraries/isteven-multi-select.css') }}">
@endsection

@section('fil-ariane')
    <li><a href="{{ url(route('accueil-entreprise')) }}"> Panel entreprise </a></li>
@endsection

@section('content')
    <div  ng-app="EntrepriseApp">
        <div ng-view>
            @yield('panel_content')
        </div>
    </div>
@endsection

@section('menu')
    <li class="{{ Request::is('entreprise/accueil*') ? 'active':'' }}">
        <a href="{{ url(route('accueil-entreprise')) }}"> Accueil</a>
    </li>

    <li class="{{ Request::is('entreprise/profil*') ? 'active':'' }}">
        <a href="{{ url(route('profil-entreprise')) }}">Profil</a>
    </li>

    <li class="{{ Request::is('entreprise/offre-stage*') ? 'active':'' }}">
        <a href="{{ url(route('offre-stage-entreprise')) }}">Gestion offre de stage</a>
    </li>

    <li class="{{ Request::is('entreprise/recherche-etudiant*') ? 'active':'' }}">
        <a href="{{ url('entreprise#/recherche-etudiant') }}">Recherche etudiant</a>
    </li>

@endsection

@section('script_js')

    <script src="{{ asset('js/angular/directives/dirPagination.js') }}"></script>
    <script src="{{ asset('js/angular/directives/isteven-multi-select.js') }}"></script>

    <script src="{{ asset('js/angular/entrepriseApp.js') }}"></script>

    <script src="{{ asset('js/angular/services/rechercheEtudiant.js') }}"></script>

    <script src="{{ asset('js/angular/controllers/rechercheEtudiant.js') }}"></script>

    <script src="{{ asset('js/angular/filters/customSpecialiteFilter.js') }}"></script>
    <script src="{{ asset('js/angular/filters/customCompetenceFilter.js') }}"></script>

@endsection
