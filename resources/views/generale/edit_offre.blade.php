<form role="form" method="POST" action="{{ URL($route.$offre->id) }}" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <!-- ENTREPRISE -->

    @if(Auth::user()->user_type != 'App\Entreprise')
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
            <select class="form-control" name="entreprise_id" id="entreprise_id" required>
                <option selected>Aucune entreprise existante</option>
                @foreach($entreprises as $entreprise)
                    @if($offre->entreprise_id == $entreprise->id)
                        <option selected value="{{ $entreprise->id }}" >{{ $entreprise->nom }}</option>
                    @else
                        <option value="{{ $entreprise->id }}" >{{ $entreprise->nom }}</option>
                    @endif
                @endforeach
            </select>
            <div class="input-group-addon"><span> Choix de l'entreprise</span></div>
        </div>
        <br/>
    @endif


    <!-- TITRE -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
        <input class="form-control" type="text" name="title" id="title"
               placeholder="Titre du stage" required="required" value="{{ $offre->title }}"/>
        <div class="input-group-addon"><span>Titre du stage</span></div>
    </div>
    <br/>


    <!-- PROMOTION -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
        <select class="form-control" name="promotion" id="promotion" required="required">
            @foreach($promotions as $promotion)
                @if($promotion->id == $offre->promotion_id)
                    <option selected value="{{ $promotion->id }}"> {{ $promotion->nom }} </option>
                @else
                    <option value="{{ $promotion->id }}"> {{ $promotion->nom }}</option>
                @endif
            @endforeach
        </select>
        <div class="input-group-addon"><span>Année de formation</span></div>
    </div>
    <br/>

    <!-- DESCRIPTION -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
            <textarea class="form-control" name="description" id="description"
                      cols="30" rows="5" required>{{ $offre->description }}</textarea>
        <div class="input-group-addon"><span>Description du stage</span></div>
    </div>
    <br/>


    <!-- COMPETENCES -->

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></div>
            <select class="select-multiple" multiple name="competence[]" id="competence" required>
                @foreach($competences['all'] as $competence)

                    @if(in_array($competence->id, $competences['mine']))
                        <option selected value="{{ $competence->nom }}">{{ $competence->nom }}</option>
                    @else
                        <option value="{{ $competence->nom }}">{{ $competence->nom }}</option>
                    @endif
                @endforeach
            </select>
            <div class="input-group-addon"><span>Compétences requises</span></div>
        </div>
    </div>
    <br/>


    <!-- DEBUT -->

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input class="form-control" type="month" min="2015-06" name="date_debut" id="date_debut"
               placeholder="Date de début du stage" value="{{ $offre->date_debut }}"/>
        <div class="input-group-addon"><span>Début (indicatif)</span></div>
    </div>
    <br/>


    <!-- DUREE -->

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
        <input class="form-control" type="number" min="1" name="duree" id="duree"
               placeholder="Durée du stage" value="{{ ($offre->duree == 0)?"":$offre->duree }}"/>
        <div class="input-group-addon"><span>Durée (en semaine)</span></div>
    </div>
    <br/>


    <!-- NOM CONTACT -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
        <input class="form-control" type="text" name="nom_contact" id="nom_contact"
               placeholder="Nom du contact" value="{{ $offre->nom_contact }}"/>
        <div class="input-group-addon"><span>Nom du contact</span></div>
    </div>
    <br/>


    <!-- EMAIL -->

    <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
        <input class="form-control" type="email" name="email" id="email"
               placeholder="Email" value="{{ $offre->email }}"/>
        <div class="input-group-addon"><span>Email</span></div>
    </div>
    <br/>


    <!-- TEL -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
        <input class="form-control" type="tel" name="tel" id="tel"
               placeholder="Telephone" value="{{ $offre->tel }}"/>
        <div class="input-group-addon"><span>Telephone</span></div>
    </div>
    <br/>


    <!-- AMPLITUDE HEBDO -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
        <input class="form-control" type="text" name="horaire" id="horaire"
               placeholder="Amplitude horaire hebdomadaire" value="{{ $offre->horaire }}"/>
        <div class="input-group-addon"><span>Amplitude horaire</span></div>
    </div>
    <br/>


    <!-- LIEU -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
        <input class="form-control" type="text" name="adresse_stage" id="adresse_stage"
               placeholder="Lieu du stage" value="{{ $offre->adresse_stage }}"/>
        <div class="input-group-addon"><span>Lieu du stage</span></div>
    </div>
    <br/>


    <!-- GRATIFICATION -->

    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></div>
        <input class="form-control" type="text" name="gratification" id="gratification"
               placeholder="Gratification (en €)" value="{{ $offre->gratification }}"/>
        <div class="input-group-addon"><span>Gratification (en €)</span></div>
    </div>
    <br/>
    <br/>

    <p class="login button">
        <input type="submit" class="btn btn-form" value="Valider">
    </p>
</form>