<form role="form" method="POST" action="{{ url(route($route)) }}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @if(Auth::user()->user_type != 'App\Entreprise')
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
            <select class="form-control" name="entreprise_id" id="entreprise_id" required>
                <option selected>Aucune entreprise existante</option>
                @foreach($entreprises as $entreprise)
                    <option value="{{ $entreprise->id }}" >{{ $entreprise->nom }}</option>
                @endforeach
            </select>
            <div class="input-group-addon"><span> Choix de l'entreprise</span></div>
        </div>
        <br/>
    @endif

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
        <input class="form-control" type="text" name="title" id="title" placeholder="Titre du stage" required="required" />
        <div class="input-group-addon"><span>Titre du stage</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
        <select class="form-control" name="promotion" id="promotion" required="required">
            <option selected disabled> Sélectionner une promotion</option>
            @foreach($promotions as $promotion)
                <option value="{{ $promotion->id }}"> {{ $promotion->nom }}</option>
            @endforeach
        </select>
        <div class="input-group-addon"><span>Année de formation</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
        <textarea class="form-control" name="description" id="description"  cols="30" rows="5" required></textarea>
        <div class="input-group-addon"><span>Description du stage</span></div>
    </div>
    <br/>

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></div>
            <select class="select-multiple" multiple name="competence[]" id="competence" required>
                @foreach($competences as $competence)
                    <option value="{{ $competence->nom }}">{{ $competence->nom }}</option>
                @endforeach
            </select>
            <div class="input-group-addon"><span>Compétences requises</span></div>
        </div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input class="form-control" type="month" min="2015-06" name="date_debut" id="date_debut" placeholder="Date de début du stage" />
        <div class="input-group-addon"><span>Début (indicatif)</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input class="form-control" type="number" min="1" name="duree" id="duree" placeholder="Durée du stage" />
        <div class="input-group-addon"><span>Durée (en semaine)</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
        <input class="form-control" type="text" name="nom_contact" id="nom_contact" placeholder="Nom du contact" />
        <div class="input-group-addon"><span>Nom du contact</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
        <div class="input-group-addon"><span>Email</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
        <input class="form-control" type="tel" name="tel" id="tel" placeholder="Telephone" />
        <div class="input-group-addon"><span>Telephone</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
        <input class="form-control" type="text" name="horaire" id="horaire" placeholder="Amplitude horaire hebdomadaire" />
        <div class="input-group-addon"><span>Amplitude horaire</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
        <input class="form-control" type="text" name="adresse_stage" id="adresse_stage" placeholder="Lieu du stage" />
        <div class="input-group-addon"><span>Lieu du stage</span></div>
    </div>
    <br/>

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
        <input class="form-control" type="text" name="gratification" id="gratification" placeholder="Gratification (en €)"/>
        <div class="input-group-addon"><span>Gratification (en €)</span></div>
    </div>
    <br/>
    <br/>


    <p class="login button">
        <input type="submit" class="btn btn-form" value="Envoyer">
    </p>
</form>