@extends('moderateur.layout')

@section('title')
    Gestion des publications de stages
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Offres Stages</li>
@endsection

@section('content')

  <br/>

  @include('generale.flash_message')

  <div class="historique__header">
      <div class="historique__header__title">
          <span class="historique__header__title__span">Gérer mes publications de stage</span>
      </div>
      <div class="historique__header__add">
          <a href="{{ URL('moderateur/offre-stage/create') }}" class="btn-float-action btn-green">+</a>
      </div>
  </div>

  <br/>

  @include('generale.carte_offre_template', [
        'offres'  => $offres,
        'boutons' => 'moderateur.boutons.gestion_offres'
  ])

@endsection


@section('script_js')
    <script type="text/javascript">
        $(document).ready(function () {

            $('[data-toggle="tooltip"]').tooltip();

            $('.affichage-offre').click(function(){
                $.ajax({
                    type: "GET",
                    url: $(this).attr('href')
                }).done(function(html_form) {
                    $('#offre-stage-modal').html(html_form);
                    $('#offre-stage-modal').show();
                });
                return false;
            });
        });
    </script>
@endsection