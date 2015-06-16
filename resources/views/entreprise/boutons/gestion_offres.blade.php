<div class="btn btn-form btn-blue-view">
    <a href="{{ URL('entreprise/offre-stage/'.$offre->id) }}">
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="historique__list__item__control__name">Afficher</span>
    </a>
</div>

@if(!$offre->valide)
    <div class="btn btn-form btn-orange-edit">
        <a href="{{ URL('entreprise/offre-stage/'.$offre->id.'/edit') }}">
            <span class="glyphicon glyphicon-pencil"></span>
            <span class="historique__list__item__control__name">Modifier</span>
        </a>
    </div>
@endif
<div class="btn btn-form btn-red-trash">
    <form action="{{ URL('entreprise/offre-stage/'.$offre->id) }}" method="POST" style="display: inline;">
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit"> <span class="glyphicon glyphicon-trash"></span> </button>
    </form>
    <span class="historique__list__item__control__name">Effacer</span>
</div>
