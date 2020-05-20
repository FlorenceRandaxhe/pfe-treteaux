@if(Page::get('displayAlert'))
<section class="infoSection infoSection--{{ Page::get('alertType') }}">
    <div class="infoSection__container wrapper">
        <h2 class="infoSection__title">{{ Page::get('alertTitle') }}</h2>
        <div class="infoSection__content">
            @markdown {{ Page::get('alertContent') }} @endmarkdown
        </div>
        @if(Page::get('linkAlert'))
            <a class="infoSection__link" href="{{ route('singleNews', ['post' => Page::get('linkAlert')]) }}">{{ Page::get('labelAlert') }}</a>
        @endif
    </div>
</section>
@endif