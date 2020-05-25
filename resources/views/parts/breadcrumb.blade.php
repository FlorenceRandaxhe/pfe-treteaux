<div class="breadcrumb">
    <div class="breadcrumb__container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item {{active(['booking'], 'breadcrumb__item--current')}}">
                @if (is_active(['booking', 'seating', 'cart', 'payment']))
                <a href="{{ route('booking', ['event' => $event->slug]) }}" class="breadcrumb__text">Places</a>
                @else
                <p class="breadcrumb__text">Places</p>
                @endif
            </li>
            @if($event->seating == 1)
            <li class="breadcrumb__item {{active(['seating'], 'breadcrumb__item--current')}}">
                @if (is_active(['seating', 'cart', 'payment']))
                <a href="{{ route('seating', ['event' => $event->slug]) }}" class="breadcrumb__text">Placement</a>
                @else
                <p class="breadcrumb__text">Placement</p>
                @endif
            </li>
            @endif
            <li class="breadcrumb__item {{active(['cart'], 'breadcrumb__item--current')}}">
                @if (is_active(['cart', 'payment']))
                <a href="{{ route('cart', ['event' => $event->slug]) }}" class="breadcrumb__text">Panier</a>
                @else
                <p class="breadcrumb__text">Panier</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active(['payment'], 'breadcrumb__item--current')}}">
                @if (is_active(['payment']))
                <a href="{{ route('payment', ['event' => $event->slug]) }}" class="breadcrumb__text">Payement</a>
                @else
                <p class="breadcrumb__text">Payement</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                @if (is_active(['cart']))
                <a href="{{ route('cart', ['event' => $event->slug]) }}" class="breadcrumb__text">Vos infos</a>
                @else
                <p class="breadcrumb__text">Vos infos</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                @if (is_active(['cart']))
                <a href="{{ route('cart', ['event' => $event->slug]) }}" class="breadcrumb__text">Confirmation</a>
                @else
                <p class="breadcrumb__text">Confirmation</p>
                @endif
            </li>
        </ul>
    </div>
</div>