@extends('etudiant.layout')

@section('title')
    Editer une offre de stage
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Editer une offre de stage</li>
@endsection

@section('content')

  <h3>Editer Offre Stage</h3><br/>

  @include('generale.form_notification')
  @include('generale.flash_message')

  @include('generale.edit_offre',
      [
          'route' => 'etudiant/offre-stage/',
          'offre' => $offre,
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