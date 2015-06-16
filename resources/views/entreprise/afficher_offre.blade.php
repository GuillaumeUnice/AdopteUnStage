@extends('entreprise.layout')

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

    <h2>Candidatures</h2>
    @include('generale.carte_user_template',[
        'users' => $candidatures,
        'boutons' =>'entreprise.boutons.pourvoir_offre_stage'
    ])


@endsection


@section('script_js')
    <script type="text/javascript">
        $(document).ready(function(){

            $('.offre__entreprise__footer__feedbacks').css('display','none');

        });
    </script>
@endsection