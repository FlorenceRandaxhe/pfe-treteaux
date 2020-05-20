<div class="singlePost">
    <div class="singlePost__container wrapper">
        <p class="singlePost__date">Publié le {{ $post->published_at->isoFormat('DD MMM Y') }}</p>

        <div class="wysiwyg">
            @markdown {{ $post->content }} @endmarkdown
        </div>
    </div>
</div>