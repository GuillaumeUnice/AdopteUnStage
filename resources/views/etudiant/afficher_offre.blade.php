@extends('etudiant.layout')

@section('title')
    {{ $offre->title }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/offre_stage.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
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
                    $('.offre__feedbacks').append(
                            "<div class=\"offre__feedback_item\">"
                            +"<div class=\"offre__feedback__item__titre\">"+value['titre']+"</div>"
                            +"<div class=\"offre__feedback__item__contenu\">" +
                                "<strong>Processus de recrutement : </strong><br>"
                                +value['recrutement_feedback']
                            +"</div>"
                            +"<div class=\"offre__feedback__item__contenu\">" +
                                "<strong>Retour sur le stage : </strong><br>"
                                +value['contenu']
                            +"</div></div>");
                    if(value['isOuvert'])
                        $('.offre__feedbacks').append(
                                "<div class=\"offre__feedback_item\">"
                                +"<div class=\"offre__feedback__item__titre\">Etudiant qui partage l'expérience</div>"
                                +"<div class=\"offre__feedback__item__contenu\">" +
                                    "<strong>Nom du contact : </strong><br>"
                                    +value['name']
                                +"</div>"
                                +"<div class=\"offre__feedback__item__contenu\">" +
                                    "<strong>Email du contact : </strong><br>"
                                    +value['email']
                                +"</div></div>");
                });
            });

        });
    </script>
@endsection