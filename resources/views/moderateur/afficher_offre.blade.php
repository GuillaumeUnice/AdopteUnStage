@extends('moderateur.layout')

@section('title')
    {{ $offre->title }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/offre_stage.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li><a href="{{ url(route('offre-stage-moderateur')) }}"> Offres Stages </a></li>
    <li class="active">{{ $offre->title }}</li>
@endsection

@section('content')


    @include('generale.flash_message')

    @include('generale/vue_offre')

@endsection


@section('script_js')
    <script type="text/javascript">
        $(document).ready(function(){

            var str = "{{ json_encode($feedbacks) }}",
                    feedbacks = str.replace(/&quot;/g, '"'),
                    list = JSON.parse(feedbacks);

            $('.offre__entreprise__footer__feedbacks > a').one("click", function(){
                $('.offre__entreprise__footer__feedbacks').hide();
                $.each(list, function(index, value){
                    $('.offre__feedbacks').append("<div class=\"offre__feedback_item\">"
                    +"<div class=\"offre__feedback__item__titre\">"+value['titre']+"</div>"
                    +"<div class=\"offre__feedback__item__contenu\"><strong>Processus de recrutement : </strong><br>"+value['recrutement_feedback']+"</div>"
                    +"<div class=\"offre__feedback__item__contenu\"><strong>Retour sur le stage : </strong><br>"+value['contenu']+"</div></div>");
                });
            });

        });
    </script>
@endsection