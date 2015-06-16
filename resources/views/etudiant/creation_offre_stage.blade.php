@extends('etudiant.layout')

@section('title')
    Validation d'une offre
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Validation d'une offre</li>
@endsection

@section('content')

    @include('generale/flash_message')
    @include('generale/form_notification')


  <h3>Faire valider une offre de stage</h3><br/>

  <div class="alert alert-info">Toute offre de stage trouvée à l'extérieur de l'application doit être soumise à validation par le
      corps enseignant de votre promo. Veillez donc à bien remplir le formulaire suivant.
  </div>
  <br/>

    @include('generale.create_offre',
        [
            'route' => 'offre-stage-etudiant',
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
