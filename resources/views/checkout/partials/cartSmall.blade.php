<div class="cartSmall">
    <p class="cartSmall__title">Votre panier</p>
    @foreach(Session::get('category') as $key => $value)

        <div class="cartSmall__content">
            <p class="cartSmall__product">
                <span>{{ Str::ucfirst($value) }}</span>
                @if($event->seating == 0)
                <span> - Siège n°{{ Session::get('select')[$key] }}</span>
                @endif
            </p>
            <p class="cartSmall__price">{{ $event->prices[$value] }}€</p>
        </div>

    @endforeach

    <p class="cartSmall__total">Total&nbsp;: {{ Session::get('total') }}€</p>

</div>