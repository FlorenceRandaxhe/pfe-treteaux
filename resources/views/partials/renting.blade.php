<section class="renting">
    <div class="renting__container renting__tab wrapper">
        <div class="renting__intro renting__intro--sticky">
            <h2 class="renting__title">{{ Page::get('roomTitle') }}</h2>
                @include('parts.tabs')
        </div>
        <div class="renting__content">
            @include('parts.rentingInfo')
        </div>
    </div>
</section>

<section class="renting" id="form">
    <div class="renting__container wrapper">
        <div class="renting__intro">
            <h2 class="renting__title">{{Page::get('formTitle')}}</h2>
            <p class="renting__text">{{Page::get('intro')}}</p>
        </div>
        <div class="renting__content">
            @if(session()->has('success'))
                <x-success>
                    Votre demande a bien été envoyée. Nous reviendrons vers vous le plus rapidement possible
                </x-success>
            @else
                @include('parts.rentingForm')
            @endif
        </div>
    </div>
</section>