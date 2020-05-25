@foreach (Page::flexible('rooms', ['room' => \App\Nova\Flexible\Layouts\RoomLayout::class]) as $room)
<section class="rentingInfo" id="{{Str::slug($room->roomName)}}">
    <h3 class="rentingInfo__title">{{ $room->roomName }}</h3>
    <div class="rentingInfo__content">
        <ul class="rentingInfo__list">
            @foreach($room->description as $feature)
                <li class="rentingInfo__item">
                    <div class="rentingInfo__label">{{ $feature->attributes->featureName }}</div>
                    <div class="rentingInfo__content wysiwyg">
                        @markdown {{ $feature->attributes->featureContent }} @endmarkdown
                    </div>
                </li>
            @endforeach
        </ul>
        @if($room->roomNote)
            <p class="rentingInfo__note">{{ $room->roomNote }}</p>
        @endif
        @if($room->download)
            <div class="rentingInfo__links">
                @foreach($room->download as $download)
                    <a href="{{ asset('storage/' . $download->attributes->roomFile) }}" download class="rentingInfo__link"><span class="sro">Télécharger </span>{{ $download->attributes->roomLabel }}</a>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endforeach
