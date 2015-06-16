<div class="btn btn-form btn-blue-view">
    <a href="{{ URL('etudiant/offre-stage/'.$offre->id) }}">
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="historique__list__item__control__name">Afficher</span>
    </a>
</div>

@if($offre->feedback_id && $offre->stagiaire_id!=null)
    <div class="btn btn-form btn-orange-edit">
        <a href="{{ URL('etudiant/historique-feedback/'.$offre->id) }}">
            <span class="glyphicon glyphicon-link"></span>
            <span class="historique__list__item__control__name">Feedback</span>
        </a>
    </div>
@else
    @if($offre->stagiaire_id!=null)
    <div class="btn btn-form btn-red-trash">
        <a href="{{ URL('etudiant/historique-feedback/'.$offre->id.'/create') }}">
            <span class="glyphicon glyphicon-comment"></span>
            <span class="historique__list__item__control__name">Feedback</span>
        </a>
    </div>
    @else
        <div class="btn btn-form  btn-blue-view">
            <span class="glyphicon glyphicon-lock"></span>
            <span class="historique__list__item__control__name">Pourvoir</span>
        </div>
    @endif
@endif
