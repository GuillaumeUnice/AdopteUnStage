<br/><br/>

<div class="offre">

    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">{{ $offre->title }}</span>
        </div>
        <div class="historique__header__add">
            @if(Auth::user()->user_type == 'App\Etudiant' && $offre->stagiaire_id==null )
                <span>Postuler</span>
                <a href="{{ URL('etudiant/postuler/'.$offre->id) }}" class="btn-float-action btn-green" style="padding: 16px 18px;">
                    <i class="fa fa-rocket"></i>
                </a>
            @elseif(Auth::user()->user_type == 'App\Moderateur')
                <span>Valider l'offre</span>
                <form action="{{ URL('/moderateur/validation-offrestage') }}" id="valider" method="POST" style="display: inline;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_id" value="{{ $offre->id }}">
                    <a href="#" onclick="document.getElementById('valider').submit();" class="btn-float-action btn-green" style="padding: 16px 18px;">
                        <i class="fa fa-check"></i>
                    </a>
                </form>
            @endif
        </div>
    </div>

    <br/><br/>
    <div class="offre__entreprise offre__block">
        <div class="offre__entreprise__header">
            <div class="offre__entreprise__header__title">
                <span class="offre__entreprise__header__name">{{ $offre['entreprise']->nom }}</span>
                <span class="offre__entreprise__header__place">à {{ $offre['entreprise']->lieu }}</span>
            </div>
            <div class="offre__entreprise__header__secteur">
                @if($offre['entreprise']->secteur != null)
                    {{ $offre['entreprise']->secteur }}
                @endif
            </div>
        </div>

        <div class="offre__entreprise__content">
            <div class="offre__entreprise__content__title">
                Description :
            </div>
            <div class="offre__entreprise__content__description">
                @if($offre['entreprise']->description != null)
                    {{ $offre['entreprise']->description }}
                @else
                <div class="alert alert-success">
                    Aucune description
                </div>
                @endif
            </div>
        </div>

        <div class="offre__entreprise__footer">
            <div class="offre__entreprise__footer__website">
                @if($offre['entreprise']->site != null)
                   Site web : <a class="btn btn-link" href="{{ $offre['entreprise']->site }}">{{ $offre['entreprise']->site }}</a>
                @endif
            </div>
            <div class="offre__entreprise__footer__feedbacks">
                @if(Auth::user()->user_type != 'App\Entreprise')
                    @if($feedbacks->first()!=null)
                        <a class="btn btn-link">Afficher les commentaires sur l'entreprise</a>
                    @else
                        <i class="btn btn-link">Aucun commentaire sur l'entreprise</i>
                    @endif
                @endif
            </div>
        </div>

    </div>

    <div class="offre__feedbacks">
        <div class="offre__feedback__item"></div>
    </div>


    <div class="offre__description offre__block">
        <div class="offre__description__header offre__block__header">
            <span class="block__header__title">Description du stage</span>
        </div>
        <div class="offre__block__row">
            <div class="offre__block__cell">
                <span class="contenu"> {{ $offre->description }} </span>
            </div>
        </div>
    </div>

    @if($offre->competences->first() != null)
        <div class="offre__description offre__block">
            <div class="offre__description__header offre__block__header">
                <span class="block__header__title">Compétences requises</span>
            </div>
            <div class="offre__block__row">
                <div class="offre__block__cell">
                    <span class="contenu">
                        <ul>
                            @foreach($offre->competences as $competence)
                                <li>{{ $competence->nom }}</li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    @endif

    <div class="offre__infos offre__block">
        <div class="offre__infos__header offre__block__header">
            <span class="block__header__title">Informations utiles</span>
        </div>
        <div class="offre__block__row">

            <div class="offre__block__cell__left">

                <div class="offre__infos__contact">
                    <span class="titre">Contact : </span><br/><br/>
                    @if($offre->nom_contact || $offre->tel || $offre->email)
                        <span class="contenu">{{ $offre->nom_contact }}</span><br/>
                        <span class="contenu"><i>{{ $offre->tel }}</i></span><br/>
                        <span class="contenu"><i>{{ $offre->email }}</i></span><br/>
                    @else
                        <span class="contenu"><i>Aucun contact</i></span>
                    @endif
                </div>
            </div>

            <div class="offre__block__cell__right">

                <div class="offre__infos__description">

                    <!-- DEBUT DU STAGE -->
                    <span class="titre"> Début du stage (approximatif)  :  </span>
                    @if($offre->date_debut)
                        <span class="contenu"> <i>{{ $offre->date_debut }}</i> </span><br/>
                    @else
                        <span class="contenu"><i>Non précisé</i></span><br/>
                    @endif

                    <!-- DUREE DU STAGE -->
                    <span class="titre"> Durée du stage  :  </span>
                    @if($offre->duree)
                        <span class="contenu"> <i>{{ $offre->duree }}</i> </span><br/>
                    @else
                        <span class="contenu"><i>Non précisée</i></span><br/>
                    @endif

                    <!-- LIEU DU STAGE -->
                    <span class="titre"> Lieu du stage  :  </span>
                    @if($offre->adresse_stage)
                        <span class="contenu"> <i>{{ $offre->adresse_stage }}</i> </span><br/>
                    @else
                        <span class="contenu"><i>Non précisé</i></span><br/>
                    @endif

                    <!-- AMPLITUDE HEBDO -->
                    <span class="titre"> Amplitude hebdomadaires  :  </span>
                    @if($offre->horaires)
                        <span class="contenu"> <i>{{ $offre->horaires }}</i> </span><br/>
                    @else
                        <span class="contenu"><i>Non précisée</i></span><br/>
                    @endif

                    <!-- GRATIFICATION -->
                    <span class="titre"> Gratification  :  </span>
                    @if($offre->gratification)
                        <span class="contenu"> <i>{{ $offre->gratification }}</i> </span><br/>
                    @else
                        <span class="contenu"><i>Non précisée</i></span><br/>
                    @endif
                </div>
            </div>

        </div>
        <div class="offre__infos__tags">
            <span class="titre"> Tags associés : </span>
            <span class="contenu">

                @if(isset($offre->promotion_id))
                    {{ $offre['promotion']->nom}}
                @elseif(isset($offre->specialite_id))
                    {{ $offre['specialite']->nom}}
                @else
                    aucun
                @endif

                @if(isset($offre->specialite_id) && isset($offre->promotion_id))
                     - {{ $offre['specialite']->nom}}
                @endif

            </span>
        </div>
    </div>

</div>
