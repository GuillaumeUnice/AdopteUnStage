@extends('template_panel')

@section('title')
    Panel Modérateur
@endsection

@section('fil-ariane')
    <li><a href="{{ url(route('accueil-moderateur')) }}"> Panel modérateur </a></li>
@endsection

@section('content')
    @yield('panel_content')
@endsection

@section('menu')
    <li class="{{ Request::is('moderateur/accueil*') ? 'active':'' }}">
        <a href="{{ url(route('accueil-moderateur')) }}"> Accueil</a>
    </li>

    <li class="{{ Request::is('moderateur/invitation-etudiant*') ? 'active':'' }}">
        <a link="2" href="{{ url(route('invitation_etudiant')) }}">Invitation étudiant</a>
    </li>

    <li class="{{ Request::is('moderateur/validation-entreprise*') ? 'active':'' }}">
        <a link="3" href="{{ url(route('validation_entreprise')) }}">Validation entreprise</a>
    </li>

    <!-- TODO check les 2 -->
    <li class="{{ Request::is('moderateur/validation-offrestage*') ? 'active':'' }}">
        <a link="4" href="{{url(route('validation_offrestage'))}}">Validation des offres de stage</a>
    </li>

    <li class="{{ Request::is('moderateur/offre-stage*') ? 'active':'' }}">
        <a  link="5" href="{{ url(route('offre-stage-moderateur')) }}">Gestion offre de stage</a>
    </li>

    <li class="{{ Request::is('moderateur/promotions*') ? 'active':'' }}">
        <a link="6" href="{{ url(route('moderateur-promotions')) }}">Mes promotions</a>
    </li>
@endsection
