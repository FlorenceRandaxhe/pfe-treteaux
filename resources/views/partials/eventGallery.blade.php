@if(count($event->galleryContent) >= 1)
<section class="eventGallery">
    <div class="wrapper">
        <div class="eventGallery__container">
            <div class="eventGallery__titleWrapper">
                <h2 class="eventGallery__title">Gallerie photos</h2>
            </div>

            <div class="eventGallery__content">
                @foreach($event->galleryContent as $slide)
                    @if($slide->name() === 'video')
                    <div class="eventGallery__fig">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="eventGallery__svg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        <a href="#" class="eventGallery__imgLink">
                            <img class="eventGallery__img eventGallery__video" data-video="{{ $slide->id }}" src="{{ asset('storage/' . $slide->cover) }}">
                        </a>
                    </div>
                    @else
                    <figure class="eventGallery__fig">
                        <a href="#" class="eventGallery__imgLink">
                            <img class="eventGallery__img" alt="{{ $slide->alt }}" src="{{ asset('storage/' . $slide->photo) }}">
                        </a>
                    </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif