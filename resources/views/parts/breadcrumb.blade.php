<div class="breadcrumb">
    <div class="breadcrumb__container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item {{active(['booking'], 'breadcrumb__item--current')}}">
                @if (is_active(['booking', 'seating', 'confirm']))
                <a href="{{ route('booking', ['event' => $event->slug]) }}" class="breadcrumb__text">Places</a>
                @else
                <p class="breadcrumb__text">Places</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active(['seating'], 'breadcrumb__item--current')}}">
                @if (is_active(['seating', 'confirm']))
                <a href="{{ route('seating', ['event' => $event->slug]) }}" class="breadcrumb__text">Placement</a>
                @else
                <p class="breadcrumb__text">Placement</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active(['confirm'], 'breadcrumb__item--current')}}">
                @if (is_active(['confirm']))
                <a href="{{ route('confirm', ['event' => $event->slug]) }}" class="breadcrumb__text">Panier</a>
                @else
                <p class="breadcrumb__text">Panier</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                @if (is_active(['confirm']))
                <a href="{{ route('confirm', ['event' => $event->slug]) }}" class="breadcrumb__text">Payement</a>
                @else
                <p class="breadcrumb__text">Payement</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                @if (is_active(['confirm']))
                <a href="{{ route('confirm', ['event' => $event->slug]) }}" class="breadcrumb__text">Vos infos</a>
                @else
                <p class="breadcrumb__text">Vos infos</p>
                @endif
            </li>
            <li class="breadcrumb__item {{active([''], 'breadcrumb__item--current')}}">
                @if (is_active(['confirm']))
                <a href="{{ route('confirm', ['event' => $event->slug]) }}" class="breadcrumb__text">Confirmation</a>
                @else
                <p class="breadcrumb__text">Confirmation</p>
                @endif
            </li>
        </ul>
    </div>
</div>