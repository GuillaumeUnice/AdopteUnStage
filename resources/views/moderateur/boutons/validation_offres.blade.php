<div class="btn btn-form btn-blue-view">
    <a href="{{ URL('moderateur/offre-stage/'.$offre->id) }}">
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="historique__list__item__control__name">Afficher</span>
    </a>
</div>

@if($specialites[$offre->promotion_id-1] == null)
    <div class="btn btn-form btn-red-trash">
        {!! Form::open(['url' => route('validation-offrestage', $offre->id), 'style' => 'display : inline']) !!}
            <button type="submit"> <span class="glyphicon glyphicon-ok"></span> </button>
        {!! Form::close() !!}
        <span class="historique__list__item__control__name">Valider</span>
    </div>
@else
    <a href="#" class="btn btn-form btn-red-trash valider_offre">
        <span class="glyphicon glyphicon-ok"></span><br/>
        <span class="historique__list__item__control__name">Valider</span>
    </a>
@endif