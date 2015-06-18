<div id="offre__validation__form">
    <div class="offre__specialites">
        <div class="offre__specialites__offre__title">
            <span class="offre__entreprise__header__place">Tagger des parcours compatibles : </span>
        </div>
        <br/>

        <div class="offre__specialites__offre__formulaire">
            {!! Form::open(['url' => route('validation-offrestage', $offre->id)]) !!}
            <select class="select-multiple specialites" multiple name="specialites[]" id="specialites">
                @foreach($specialites as $k => $specialite)
                    <option value="{{ $k }}">{{ $specialite }}</option>
                @endforeach
            </select>

            <br/><br/>

            <button type="submit" class="btn-form btn-green">Valider </button>
            {!! Form::close() !!}

        </div>
    </div>
    <br/><br/>
</div>