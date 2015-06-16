@extends('moderateur.layout')

@section('title')
    Ajout d'une offre de stage
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Ajouter une offre de stage</li>
@endsection

@section('content')

  <h3>Ajouter une offre de stage</h3><br/>

  @include('generale/flash_message')
  @include('generale/form_notification')

  @include('generale.create_offre',
      [
          'route' => 'offre-stage-moderateur',
          'entreprises' => $entreprises,
          'promotions' => $promotions,
          'competences' => $competences
      ]
  )

@endsection

@section('script_js')
    <script src="{{asset('js/libraries/select2.js')}}"></script>
    <script src="{{asset('js/competences_offre.js')}}"></script>
@endsection