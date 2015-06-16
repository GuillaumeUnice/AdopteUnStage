@extends('etudiant.layout')

@section('title')
    Gestion du profil
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/forms/select_inline.css') }}">
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Gestion du profil</li>
@endsection

@section('content')

    <div id="container" style="min-width: 210px; height: 300px; max-width: 600px; margin: 0 auto" var-profil="{{$pourcentage}}"></div>

    <h3>Profil</h3><br/>


    @include('generale.form_notification')
    @include('generale.flash_message')

    <form role="form" method="POST" action="{{ url('etudiant/profil') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">

            <div class="input-group left">
                <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
                <select class="form-control" name="promotion" id="promotion" required="required">
                    <option selected disabled> Sélectionner une promotion</option>
                </select>
                <div class="input-group-addon"><span>Année de formation</span></div>
            </div>

            <div class="input-group right">
                <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
                <select class="form-control" name="specialite" id="specialite">
                    <option selected disabled>Aucune spécialité associée</option>
                </select>
                <div class="input-group-addon"><span>Filière</span></div>
            </div>

        </div>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
            <textarea class="form-control" cols="30" rows="5"  name="parcours_sco" id="parcours_sco" placeholder="Parcours scolaire">{{ ($profile)?$profile->education:'' }}</textarea>
            <div class="input-group-addon">Scolarité</div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
            <textarea class="form-control" cols="30" rows="5" name="parcours_pro" id="parcours_pro"
                      placeholder="Parcours professionel">{{ ($profile)?$profile->professionnel:'' }}</textarea>
            <div class="input-group-addon">Professionel</div>

        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
            <input class="form-control" type="text" name="website" id="website" placeholder="Site web" value="{{ $etudiant->website }}"/>
            <div class="input-group-addon">Site web</div>

        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
            <input class="form-control" type="text" name="social" id="social" placeholder="Réseaux sociaux" value="{{ $etudiant->social }}"/>
            <div class="input-group-addon">Réseaux sociaux</div>

        </div>
        <br/>

        <div class="required-info">
            <i>* Les champs en rouge sont obligatoires</i><br/>
        </div>

        <p class="login button">
            <input type="submit" class="btn-form" value="Valider">
        </p>
    </form>
@endsection

@section('script_js')

    <script type="text/javascript">

        $(document).ready(function() {

            var str = "{{ $promotions }}",
                    promotions = str.replace(/&quot;/g, '"'),
                    list = JSON.parse(promotions)
            userPromo = '{{ $etudiant->promotion_id }}',
                    userSpe = '{{ $etudiant->specialite_id }}';
            ;


            $.each(list,
                    function(index, value) {
                        var option = $('#promotion option:last').clone().attr('value', value['id']).text(value['nom'])
                                .removeAttr('selected').removeAttr('disabled');

                        if((userPromo != null) && (value['id'] == userPromo)) option.attr('selected','selected');

                        $('#promotion option:last').parent().append(option);
                    }
            );

            var promotion = $('#promotion > option:selected').attr('value');

            if(promotion) {
                $.each(list[promotion - 1]['specialites'],
                        function (index, value) {

                            var option = $('#specialite option:last').clone().attr('value', value['id']).text(value['nom'])
                                    .removeAttr('selected').removeAttr('disabled');

                            if ((userSpe != null) && (value['id'] == userSpe)) option.attr('selected', 'selected');

                            $('#specialite option:last').parent().append(option);
                        }
                );
            }


            $('#promotion').change(function() {

                $('#specialite option:first').siblings().remove();

                var promotion = $('#promotion > option:selected').attr('value');

                $.each(list[promotion-1]['specialites'], function(index, value) {


                    var option = $('#specialite option:last').clone().attr('value', value['id']).text(value['nom'])
                            .removeAttr('selected').removeAttr('disabled');
                    $('#specialite option:last').parent().append(option);
                });

            });

        });

    </script>

    {{--js pour la graphe--}}
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="{{ asset('js/chart.js') }}"></script>

@endsection
