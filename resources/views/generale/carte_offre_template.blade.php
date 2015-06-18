<div class="historique__list">

    @foreach ($offres as $offre)

        <div class="historique__list__item">
            <div class="historique__list__item__row">
                <div class="historique__list__item__content">
                          <span class="historique__list__item__content__title">
                                {{ $offre->title }}
                              @if(isset($offre->entreprise))
                                  - {{ $offre->entreprise->nom }}
                              @endif
                          </span>
                            <span class="historique__list__item__content__contact">
                                @if($offre->email)
                                    {{ $offre->email }}

                                @endif
                                @if($offre->tel != null)
                                    <span class="glyphicon glyphicon-chevron-right"></span> {{ $offre->tel }}
                                @endif
                          </span>

                    @if(isset($valide_info[$offre->id]))

                        <div class="historique__list__state">
                                <div class="historique__list__state__section">
                                        @if($valide_info[$offre->id] == '1')
                                            <span class="colored__bullet__green"></span>
                                            <span>Offre validée</span>
                                        @else
                                            <span class="colored__bullet__red"></span>
                                            <span>Validation en cours</span>
                                        @endif
                                </div>
                                <div class="historique__list__state__section">
                                    @if(isset($candidat_info['nb'][$offre->id]))
                                        @if($candidat_info['nb'][$offre->id] === '0' && isset($candidat_info['stagiaire'][$offre->id]))
                                            <span class="colored__bullet__red"></span>
                                            <span>Offre pourvue</span>
                                        @else
                                            <span class="colored__bullet__yellow"></span>
                                            <span>Des étudiants on candidatés</span>
                                        @endif
                                    @elseif(Auth::user()->user_type == 'App\Entreprise' && isset($candidat_info['stagiaire'][$offre->id]))
                                        <span class="colored__bullet__red"></span>
                                        <span>Offre pourvue</span>
                                    @else
                                        <span class="colored__bullet__green"></span>
                                        <span>Aucun candidat</span>
                                    @endif
                                </div>
                            </div>
                    @endif

                </div>


                <div class="historique__list__item__control">

                    @if(isset($candidat_info['stagiaire']))
                        @include($boutons, ['offre' => $offre, 'candidat' => $candidat_info['stagiaire']])
                    @else
                        @include($boutons, ['offre' => $offre])
                    @endif

                </div>



            </div>

        </div>

        @if(isset($validation))
            @include($validation, ['offre' => $offre, 'specialites' => $specialites[$offre->promotion_id-1]])
        @endif

    @endforeach
</div>