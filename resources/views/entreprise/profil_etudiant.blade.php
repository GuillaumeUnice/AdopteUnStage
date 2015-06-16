@extends('entreprise.layout')

@section('title')
    {{ $etudiant->name }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/offre_stage.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li><a href="{{ url('/entreprise#/recherche-etudiant') }}">Recherche des étudiants</a></li>
    <li class="active">{{ $etudiant->name }}</li>
@endsection

@section('content')


    @include('generale.flash_message')
    @include('generale/vue_etudiant')

@endsection