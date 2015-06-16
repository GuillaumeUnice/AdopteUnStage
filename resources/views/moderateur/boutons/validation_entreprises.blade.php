<div class="btn btn-form btn-red-trash">
    <form action="{{ URL('/moderateur/validation-entreprise') }}" method="POST" style="display: inline;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_id" value="{{ $entreprise->id }}">
        <button type="submit"> <span class="glyphicon glyphicon-ok"></span> </button>
    </form>
    <span class="historique__list__item__control__name">Valider</span>
</div>