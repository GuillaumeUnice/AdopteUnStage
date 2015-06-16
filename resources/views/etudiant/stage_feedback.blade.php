@extends('etudiant.layout')

@section('title')
    Gestion du feedback
@endsection


@section('fil-ariane')
    @parent
    <li class="active">Gestion du feedback</li>
@endsection

@section('content')

  <a href="{{ url(route('historique-feedback-detail')) }}"></a>
  <br/>
  <h3>Historique de Stages</h3><br/>
  <hr>
  <div class="panel-body">
    <div class="page">
      <h4>Stage {{ $stage->title }}</h4>
      <div class="content">
        <span class="glyphicon glyphicon-pencil">{{ $stage->description }}</span><p/>
        <span class="glyphicon glyphicon-user">{{ $stage->nom_contact }}</span><p/>
        <span class="glyphicon glyphicon-phone">{{ $stage->email }}</span><p/>
        <span class="glyphicon glyphicon-phone">{{ $stage->tel }}</span><p/>
        <span class="glyphicon glyphicon-map-marker">{{ $stage->adresse_stage }}</span><p/>
      </div>
    </div>
  </div>


@include('generale.form_notification')
@include('generale.flash_message')

<form role="form" method="POST" action="{{ URL('etudiant/historique-feedback/'.$feedback->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_id" value="{{ $feedback->id }}">
    <input type="hidden" name="stage_id" value="{{ $stage->id }}">

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
        <input class="form-control" type="text" name="titre" id="titre" placeholder="Titre du feedback" required="required" value="{{ $feedback->titre }}"/>
        <div class="input-group-addon">Titre du feedback</div>

    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
        <textarea class="form-control" cols="30" rows="5" name="contenu" id="contenu"
                  placeholder="Contenu du feedback">{{$feedback->contenu}}</textarea>
        <div class="input-group-addon">Contenu du feedback</div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
        <textarea class="form-control" cols="30" rows="5" name="recrutement_feedback" id="recrutement_feedback"
                  placeholder="Retour du recrutement">{{$feedback->recrutement_feedback}}</textarea>
        <div class="input-group-addon">Retour du recrutement</div>
    </div>
    <br/>

    <div class="required-info">
        <i>* Les champs en rouge sont obligatoires</i><br/>
    </div>

    <div class="form-group">
      <div class="checkbox">
          <label for="ouvertcontact">
              @if($feedback->isOuvert)
              <input type="checkbox" name="ouvertcontact" id="ouvertcontact" checked/>
              @else
              <input type="checkbox" name="ouvertcontact" id="ouvertcontact"/>
              @endif
              Autorisez à afficher mes informations du contact
          </label>
      </div>
    </div>

    <p class="login button">
        <input type='submit'  class="btn btn-success" value="Modifier"> </input>
    </p>
</form>
{!! Form::open(['route' =>['historique-feedback-supprimer', $feedback->id], 'method' => 'delete']) !!}
    <input type="submit" class="btn btn-danger" value="Supprimer"></input>
{!! Form::close() !!}
@endsection