<div class="tabs">
    <ul class="tabs__list">
        @foreach (Page::flexible('rooms', ['room' => \App\Nova\Flexible\Layouts\RoomLayout::class]) as $room)
            <li class="tabs__item" data-tab="{{Str::slug($room->roomName)}}">
                <a class="tabs__link" href="#{{Str::slug($room->roomName)}}">
                    <span class="tabs__text">{{ $room->roomName }}</span>
                </a>
            </li>
         @endforeach
    </ul>
</div>