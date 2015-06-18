@extends('template_panel')

@section('title')
    Panel Administrateur
@endsection

@section('fil-ariane')
    <li><a href="{{ url(route('accueil-administrateur')) }}"> Panel administrateur </a></li>
@endsection

@section('content')
    @yield('panel_content')
@endsection

@section('menu')
    <li class="{{ Request::is('administrateur/identite-ecole*') ? 'active':'' }}">
        <a href="{{ url(route('admin_identite_ecole_get')) }}">Profil de l'école</a>
    </li>

    <li class="{{ Request::is('administrateur/invitation-moderateur*') ? 'active':'' }}">
        <a href="{{ url(route('invitation_moderateur')) }}">Invitation moderateur</a>
    </li>

    <li class="{{ Request::is('administrateur/promotion*') ? 'active':'' }}">
        <a href="{{ url(route('admin_promotion_get')) }}">Gestion des promotions</a>
    </li>

    <li class="{{ Request::is('administrateur/specialite*') ? 'active':'' }}">
        <a href="{{ url(route('admin_specialite_read')) }}">Gestion des spécialités</a>
    </li>
@endsection