@extends('etudiant.layout')

@section('title')
    Ajouter mon propre offre stage
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Ajouter mon propre offre stage</li>
@endsection

@section('content')

  <br/>
  <h3>Ajouter mon propre offre stage</h3><br/>
  @include('generale.flash_message')



  <div class="panel-body">
    <a href="{{ URL('etudiant/offre-stage/create') }}" class="btn btn-lg btn-primary">Ajouter mon stage</a>
    </div>
  </div>
@endsection