@extends('etudiant.layout')

@section('title')
    Recherche et Postuler
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('css/crud_list.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Recherche et Postuler</li>
@endsection

@section('content')

  <br/>
  <h3>Recherche et Postuler</h3><br/>
  @include('generale.flash_message')

  <div class="panel-body">
    <div class="page">
      @foreach ($offres as $offre)
        @if($offre->valide && (!$offre->stagiaire_id) )
          <h4>Offre Stage: {{ $offre->title }}</h4>  
          <div class="content">
            <p><span class="glyphicon glyphicon-pencil">{{ $offre->description }}</span></p>
            <p><span class="glyphicon glyphicon-user">{{ $offre->nom_contact }}</span></p>
            <p><span class="glyphicon glyphicon-phone">{{ $offre->email }}</span></p>
            <p><span class="glyphicon glyphicon-phone">{{ $offre->tel }}</span></p>
            <p><span class="glyphicon glyphicon-map-marker">{{ $offre->adresse_stage }}</span></p>
          </div>
          <a href="{{ URL('etudiant/recherche-postuler/'.$offre->id) }}"  class="btn btn-success">Postuler</a>
          <hr>
        @endif
      @endforeach
    </div>
  </div>
@endsection