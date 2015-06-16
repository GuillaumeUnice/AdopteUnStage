<div class="btn btn-form btn-blue-view">
    <a href="{{ URL('etudiant/offre-stage/'.$offre->id) }}">
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="historique__list__item__control__name">Afficher</span>
    </a>
</div>
<div class="btn btn-form btn-red-trash">
    <a href="{{url('etudiant/postuler/'.$offre->id)}}">
        <span class="fa fa-rocket"></span>
        <span class="historique__list__item__control__name">Postuler</span>
    </a>
</div>