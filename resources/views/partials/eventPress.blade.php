@if(count($event->pressContent) > 0)
<section class="eventPress">
    <div class="eventPress__container wrapper">
        <h2 class="eventPress__title">Dans la presse</h2>

        <div class="eventPress__content">
            @foreach($event->pressContent as $press)

                @include('parts.pressCard', [
                    'color' => 'pink',
                    'title' => $press->title,
                    'excerpt' => $press->excerpt,
                    'source' => $press->source,
                    'url' => $press->url,
                    'date' => '',
                ])

            @endforeach
        </div>
    </div>
</section>
@endif