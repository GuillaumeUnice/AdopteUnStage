<br/><br/>

<div class="etudiant">

    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">Profil de {{ $etudiant->name }}</span>
        </div>
        <div class="historique__header__add">
            <span>Contacter</span>
            <a href="mailto:{{ $etudiant->email }}" class="btn-float-action btn-green" style="padding: 16px 18px;">
                <i class="fa fa-envelope-o"></i>
            </a>
        </div>
    </div>

    <br/><br/>
    <div class="profile__identity offre__block">
        <div class="offre__entreprise__header">
            <div class="offre__entreprise__header__title">
                <span class="offre__entreprise__header__name">Qui suis-je ?</span>
            </div>
            <div class="offre__entreprise__header__secteur">
                @if( $etudiant->website != null)
                    Site web : <a class="btn btn-link" target="_blank" href="{{ (starts_with($etudiant->website, 'http://'))?$etudiant->website:'http://'.$etudiant->website }}">{{ $etudiant->website }}</a>
                @endif
            </div>
        </div>
        <div class="offre__entreprise__content">
            <ul>
                @if($etudiant->promotion != null)
                <li>
                    <span class="title">Parcours suivi dans l'école : </span>
                    <span class="contenu">{{ $etudiant->promotion->nom }}</span>
                </li>
                @endif
                @if($etudiant->specialite != null)
                    <li>
                        <span class="title">Filière : </span>
                        <span class="contenu">{{ $etudiant->specialite->nom }}</span>
                    </li>
                @endif
            </ul>

        </div>
    </div>

    @if($etudiant->education != null)
        <div class="profile__identity offre__block">
            <div class="offre__entreprise__header">
                <div class="offre__entreprise__header__title">
                    <span class="offre__entreprise__header__name">Parcours scolaire</span>
                </div>
            </div>
            <br/>
            <div class="offre__entreprise__content">
                {{ $etudiant->education }}
            </div>
        </div>
    @endif

    @if($etudiant->professionnel != null)

        <div class="profile__identity offre__block">
            <div class="offre__entreprise__header">
                <div class="offre__entreprise__header__title">
                    <span class="offre__entreprise__header__name">Parcours professionel</span>
                </div>
            </div>
            <br/>
            <div class="offre__entreprise__content">
                {{ $etudiant->professionnel }}
            </div>
        </div>
    @endif

    @if($competences->competences->first() != null)

        <div class="profile__identity offre__block">
            <div class="offre__entreprise__header">
                <div class="offre__entreprise__header__title">
                    <span class="offre__entreprise__header__name">Mes compétences</span>
                </div>
            </div>
            <br/>
            <div class="offre__entreprise__content">
                <ul>
                    @foreach($competences->competences as $competence)
                        <li>{{ $competence->nom }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if($etudiant->cv != null)

        <div class="profile__identity offre__block">
            <div class="offre__entreprise__header">
                <div class="offre__entreprise__header__title">
                    <span class="offre__entreprise__header__name">Mon CV</span>
                </div>
            </div>
            <br/>
            <div class="offre__entreprise__content" style="text-align: center">
                <iframe id="cv" style="border:0px solid #666CCC" title="" src="{{ asset($etudiant->cv) }}"
                        frameborder="1" scrolling="auto" height="1000" width="721" ></iframe>
            </div>
        </div>
    @endif

    @if($etudiant->social != null)

        <div class="profile__identity offre__block">
            <div class="offre__entreprise__header">
                <div class="offre__entreprise__header__title">
                    <span class="offre__entreprise__header__name">Réseaux sociaux</span>
                </div>
            </div>
            <br/>
            <div class="offre__entreprise__content">
                {{ $etudiant->social }}
            </div>
        </div>
    @endif

</div>
