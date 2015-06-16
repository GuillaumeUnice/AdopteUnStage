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
                    @if($offre->nom_contact != null)
                        <span class="historique__list__item__content__contact">
                            {{ $offre->nom_contact }}
                            @if($offre->email != null)
                                - Email : {{ $offre->email }}
                            @endif
                            @if($offre->tel != null)
                                - Tel : {{ $offre->tel }}
                            @endif
                      </span>
                    @endif
                </div>

                <div class="historique__list__item__control">

                    @include($boutons, ['offre' => $offre])

                </div>

            </div>

        </div>
    @endforeach
</div>