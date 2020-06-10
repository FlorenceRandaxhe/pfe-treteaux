export default class Lightbox {

    constructor(el, current) {
        this.el = el;
        this.getElements();
        this.close.focus();
        this.setEvents();
        this.current = current + 1;
        this.getSlide(this.current);
    }

    getElements() {
        this.slides = this.el.querySelectorAll('.lightbox__slides');
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
            if (e.key == 'ArrowLeft' || e.keyCode == 37) return this.nextSlide(e, 1);
            if (e.key == 'ArrowRight' || e.keyCode == 39) return this.nextSlide(e, -1);
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
    }
}
