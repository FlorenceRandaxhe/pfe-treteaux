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