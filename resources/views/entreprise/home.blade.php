@extends('entreprise.layout')

@section('title')
    Accueil
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Accueil</li>
@endsection

@section('content')

    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto" var-profil="{{$pourcentage}}"></div>
    {{--<input type="hidden" name="pourcentage" id="pourcentage" value="{{$pourcentage}}" />--}}


@endsection

@section('script_js')
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
@endsection