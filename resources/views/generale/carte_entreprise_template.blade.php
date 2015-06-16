<div class="historique__list">

@foreach ($entreprises as $entreprise)

        <div class="historique__list__item">
            <div class="historique__list__item__table">
                <div class="historique__list__item__row">
                    <div class="historique__list__item__content">
                        <span class="historique__list__item__content__title">
                            {{ $entreprise->nom }} - {{ $entreprise->lieu }}
                        </span>

                        @if($entreprise->siret !=null)
                            <span class="historique__list__item__content__siret">
                                N° SIRET : {{ $entreprise->siret }} <br/>
                            </span>
                        @endif

                        @if($entreprise->name != null)
                            <span class="historique__list__item__content__contact">

                                {{ $entreprise->name }}
                                @if($entreprise->email != null)
                                    - {{ $entreprise->email }}
                                @endif
                                @if($entreprise->telephone != null)
                                    - {{ $entreprise->telephone }}
                                @endif
                          </span>
                        @endif

                    </div>

                    <div class="historique__list__item__control">

                        @include($boutons, ['entreprise' => $entreprise])

                    </div>
                </div>
            </div>
            <div class="historique__list__item__content__description">
                <span class="historique__list__item__content__description__title">
                    Description :
                </span>
                <span class="historique__list__item__content__description__content">
                    {{ $entreprise->description }}
                </span>
            </div>
        </div>
    @endforeach
</div>