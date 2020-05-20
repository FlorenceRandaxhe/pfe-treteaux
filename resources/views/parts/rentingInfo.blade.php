@foreach (Page::flexible('rooms', ['room' => \App\Nova\Flexible\Layouts\RoomLayout::class]) as $room)
<section class="rentingInfo" id="{{Str::slug($room->roomName)}}">
    <h3 class="rentingInfo__title">{{ $room->roomName }}</h3>
    <div class="rentingInfo__content">
        <div class="wysiwyg wysiwyg--small">
            @markdown {{ $room->roomContent }} @endmarkdown
        </div>
        @if($room->roomFile)
            <a href="{{ asset('storage/' . $room->roomFile) }}" download="" class="link link--line">{{ $room->roomLabel }}</a>
        @endif
    </div>
</section>
@endforeach
