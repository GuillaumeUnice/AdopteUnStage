{{--Template des users de ma promotion--}}
<div class="historique__list">

    @foreach ($users as $user)

        <div class="historique__list__item">

            <div class="historique__list__item__row">
                <div class="historique__list__item__content">
                      <span class="historique__list__item__content__title">
                            {{$user->name}} - {{$user->promotion_nom}}
                      </span>
                      <span class="historique__list__item__content__contact">
                           {{$user->email}}
                      </span>
                </div>

                <div class="historique__list__item__control">

                    @include($boutons, ['user' => $user])

                </div>

            </div>

        </div>

    @endforeach

</div>