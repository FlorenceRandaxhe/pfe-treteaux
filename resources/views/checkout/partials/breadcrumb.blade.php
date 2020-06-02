<div class="breadcrumb">
    <div class="breadcrumb__container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item {{active(['booking'], 'breadcrumb__item--current')}}">
                @if (is_active(['seating', 'cart', 'info', 'payment']))
                <a href="{{ route('booking', ['event' => $event->slug]) }}" class="breadcrumb__text">Places</a>
                @else
                <p class="breadcrumb__text">Places</p>
                @endif
            </li>
            @if($event->seating == 0)
            <li class="breadcrumb__item {{active(['seating'], 'breadcrumb__item--current')}}">
                @if (is_active(['cart', 'info', 'payment']))
                <a href="{{ route('seating', ['event' => $event->slug]) }}" class="breadcrumb__text">Placement</a>
                @else
                <p class="breadcrumb__text">Placement</p>
                @endif
            </li>
            @endif
            <li class="breadcrumb__item {{active(['cart'], 'breadcrumb__item--current')}}">
                @if (is_active(['info', 'payment']))
                <a href="{{ route('cart', ['event' => $event->slug]) }}" class="breadcrumb__text">Panier</a>
                @else
                <p class="breadcrumb__text">Panier</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active(['info'], 'breadcrumb__item--current')}}">
                @if (is_active(['payment']))
                <a href="{{ route('info', ['event' => $event->slug]) }}" class="breadcrumb__text">Vos infos</a>
                @else
                <p class="breadcrumb__text">Vos infos</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active(['payment'], 'breadcrumb__item--current')}}">
                <p class="breadcrumb__text">Payement</p>
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                <p class="breadcrumb__text">Confirmation</p>
            </li>
        </ul>
    </div>
</div>