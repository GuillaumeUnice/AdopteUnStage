@extends('moderateur.layout')

@section('title')
    Statistiques
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/moderateur/statistique.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Statistiques</li>
@endsection

@section('content')

    @include('generale.flash_message')
    @include('generale.form_notification')

    <h3>Notifications</h3><br/>
    <a href="{{url(route('validation_entreprise')) }}"
    class="link_notification col-xs-5
    {{ ($validation_entreprise >= 1)?"link_notification_error":"link_notification_success"  }} ">
        Validation entreprise
        <span>
            {{ isset($validation_entreprise) ? $validation_entreprise : 0 }}
        </span>
    </a>

    <a href="{{url(route('validation_offrestage')) }}"
    class=" link_notification col-xs-5 col-md-offset-1
    {{ ($validation_offre_stage >= 1)?"link_notification_error":"link_notification_success"  }} ">
        Validation offre stages
        <span>
          {{ isset($validation_offre_stage) ? $validation_offre_stage : 0 }}
        </span>
    </a>
    <br/>

    <h3>Statistiques</h3><br/>
    @for ($i = 0; $i < count($promotion); $i++)
        <div class="panel_statistique">
            <h4 class="titre_panel_statistique">{{ $promotion[$i]->nom }}</h4>
            <br/>

            <div class="nombre_panel_statistique col-xs-4 ">
                Etudiant sans stage
                <span>
                  {{ isset($etudiant[$i]) ? $etudiant[$i]->total_sans_stage : 0 }}
                </span>
            </div>

            <div  class="nombre_panel_statistique col-xs-4 col-md-offset-2 ">
                Nombre total étudiant
                <span>
                  {{ isset($etudiant[$i]) ? $etudiant[$i]->total_etudiant : 0 }}
                </span>
            </div>
            <br><br><br>
            <h5>Pourcentage étudiant ayant un stage : </h5>
            <?php
                $var = 0;
                if(isset($etudiant[$i]))
                    $var = 100 - (($etudiant[$i]->total_sans_stage
                    / $etudiant[$i]->total_etudiant) * 100)
            ?>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $var }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $var }}%;">
                <span>
                    {{$var}}%
                </span>
              </div>
            </div>

            <div class="nombre_panel_statistique col-xs-7 col-md-offset-2 ">
                Nombre totale offre de stage disponible
                <span>
                  {{ isset($offre_stage[$i]) ? $offre_stage[$i]->nb_offre_stage : 0 }}
                </span>
            </div>
            <br><br><br>

            <?php
                $var = 0;
                if(isset($etudiant[$i]) && isset($offre_stage[$i])) {
                    $var =  $offre_stage[$i]->nb_offre_stage /$etudiant[$i]->total_sans_stage;
                }
            ?>
            <h5>
                <span style="float: left;">
                    Nombre moyen offre de stage par étudiant :
                </span>
                <span style="float: right;">
                    Nombre de postulation moyenne :
                </span>
            </h5>
            <div style=" clear: both;"></div>
            <div class="ratio_panel_statistique background-color: {{ ($var >= 1)?"ratio_panel_statistique_success":"ratio_panel_statistique_error"  }} col-xs-2 ">
                <span>{{number_format($var, 2) }}</span>
            </div>
            <?php
                $var = 0;
                if(isset($etudiant[$i]) && isset($offre_stage[$i])) {
                    $var = $etudiant[$i]->total_sans_stage / $offre_stage[$i]->postuler;
                }
            ?>
            <div class="ratio_panel_statistique {{ ($var >= 1)?"ratio_panel_statistique_success":"ratio_panel_statistique_error"  }} col-xs-2 col-md-offset-8 ">
                <span>{{ number_format($var, 2) }}</span>
            </div>

            <br><br><br>
        </div>

    @endfor
@endsection
