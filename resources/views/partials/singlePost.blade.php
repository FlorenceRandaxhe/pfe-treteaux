<div class="singlePost">
    <div class="singlePost__container wrapper">
        <p class="singlePost__date">Publié le {{ $post->published_at->isoFormat('DD MMM Y') }}</p>

        <div class="wysiwyg wysiwyg--news">
            {!! $post->content !!}
        </div>
    </div>
</div>