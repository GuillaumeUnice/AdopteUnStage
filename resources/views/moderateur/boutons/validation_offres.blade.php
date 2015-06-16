<div class="btn btn-form btn-blue-view">
    <a href="{{ URL('moderateur/offre-stage/'.$offre->id) }}">
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="historique__list__item__control__name">Afficher</span>
    </a>
</div>

<div class="btn btn-form btn-red-trash">
    <form action="{{ URL('/moderateur/validation-offrestage') }}" method="POST" style="display: inline;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_id" value="{{ $offre->id }}">
        <button type="submit"> <span class="glyphicon glyphicon-ok"></span> </button>
    </form>
    <span class="historique__list__item__control__name">Valider</span>
</div>