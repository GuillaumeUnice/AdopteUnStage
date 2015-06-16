@extends('etudiant.layout')

@section('title')
    Postuler
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Postuler</li>
@endsection

@section('content')

  <br/>
  <h3>Postuler</h3><br/>
  
  @include('generale.form_notification')
  @include('generale.flash_message')

  <!--============================== azupdate un cv et lm==================================== -->

    {!! Form::open(['route' => ['postuler',$offre->id], 'class' => 'form-inline', 'files' => true, 'enctype'  => 'multipart/form-data']) !!}
        <div class="input-group form-group left-bg">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" name="cv" class="form-control"/>
            <div class="input-group-addon"><span>CV</span></div>
        </div>
        <p></p>
        <div class="input-group form-group left-bg">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" name="lm" class="form-control"/>
            <div class="input-group-addon"><span>Lettre de Motivation</span></div>
        </div>

    <div class="required-info center">
        <br/><i>* Les champs en rouge sont obligatoires</i><br/>
    </div>
    <!-- ==================================Fin update un CV et LM========================= -->
    

    <!-- ==============Envoyer un email à l'entreprise correspondant ======================-->

      <p class="login button">
          <input type="submit" class="btn-form" value="Postuler">
      </p>
  {!! Form::close() !!}

@endsection