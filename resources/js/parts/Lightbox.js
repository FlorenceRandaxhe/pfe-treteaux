export default class Lightbox {

    constructor(el, current) {
        this.el = el;
        this.loadYoutubeAPi();
        this.getElements();
        this.close.focus();
        this.setEvents();
        this.current = current + 1;
        this.getSlide(this.current);
    }

    getElements() {
        this.slides = this.el.querySelectorAll('.lightbox__slides');
        this.videos = this.el.querySelectorAll('.lightbox__video');
        this.close = this.el.querySelector('.lightbox__close');
        this.next = this.el.querySelector('.lightbox__control--next');
        this.prev = this.el.querySelector('.lightbox__control--prev');
    }

    setEvents() {
        this.next.addEventListener('click', (e) => this.nextSlide(e, 1));
        this.prev.addEventListener('click', (e) => this.nextSlide(e, -1));
        this.close.addEventListener('click', (e) => this.closeLightbox(e));
        document.addEventListener('keyup', (e) => {
            if (e.key == 'Escape' || e.key == 'Esc' || e.keyCode == 27) return this.closeLightbox(e);
            if (e.key == 'ArrowLeft' || e.keyCode == 37) return this.nextSlide(e, -1);
            if (e.key == 'ArrowRight' || e.keyCode == 39) return this.nextSlide(e, 1);
        });
    }

    closeLightbox(e){
        e.preventDefault();
        document.querySelector('.eventGallery').removeChild(this.el);
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    nextSlide(e, ref) {
        e.preventDefault();
        this.getSlide(this.current += ref);
    }

    getSlide(ref) {
        if (ref > this.slides.length){this.current = 1;};
        if (ref < 1){this.current = this.slides.length;};

        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].classList.remove('lightbox__slides--current');
        }

        this.slides[this.current - 1].classList.add('lightbox__slides--current');

        if (this.slides[this.current - 1].classList.contains('lightbox__video')) {
            this.vid = this.slides[this.current - 1];
            this.loadPlayer(this.vid, this.vid.getAttribute('data-video'));
        }
    }

    loadYoutubeAPi(){
        this.tag = document.createElement('script');
        this.tag.src = "https://www.youtube.com/iframe_api";
        this.firstScriptTag = document.getElementsByTagName('script')[0];
        this.firstScriptTag.parentNode.insertBefore(this.tag, this.firstScriptTag);
    }

    loadPlayer(container, videoId){
        this.player = new YT.Player(container.querySelector('#player'), {
            playerVars: {
                controls: 0, modestbranding: true, showinfo: 0, rel: 0
            },
            videoId: videoId,
        });

    }

}
