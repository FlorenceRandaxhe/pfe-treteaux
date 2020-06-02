import Lightbox from './lightbox.js'
export default class OpenLightbox {

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements() {
        this.container = this.el.querySelector('.eventGallery__container');
        this.links = this.el.querySelectorAll('.eventGallery__imgLink');
        this.slides = this.el.querySelectorAll('.eventGallery__img');
    }

    setEvents() {
        if (document.documentElement.clientWidth < 640) return;

        for (let i = 0; i < this.links.length; i++) {
            this.links[i].addEventListener('click',(e) => this.openLightbox(e,i));
        }
    }

    openLightbox(e,i) {
        e.preventDefault();
        this.createElements();
        document.querySelector('body').classList.add('layout--scrollblock');
        this.lightbox = new Lightbox(this.lightbox, i);
    }

    createElements() {
        // lightbox container
        this.lightbox = document.createElement('div');
        this.lightbox.setAttribute('class', 'lightbox');
        this.el.appendChild(this.lightbox);

        // lightbox header
        this.lightboxHeader = document.createElement('div');
        this.lightboxHeader.setAttribute('class', 'lightbox__header');
        this.lightbox.appendChild(this.lightboxHeader);

        this.createToolbox();
        this.createImages();
    }

    createToolbox() {
        // close button
        this.close = document.createElement('a');
        this.close.setAttribute('href', '#');
        this.close.setAttribute('class', 'lightbox__close');
        this.lightboxHeader.appendChild(this.close);

        this.closeText = document.createElement('span');
        this.closeText.setAttribute('class', 'sro');
        this.closeText.innerHTML = 'Fermer';
        this.close.appendChild(this.closeText);

        // next and prev button
        this.next = document.createElement('a');
        this.spanNext = document.createElement('span')
        this.spanNext.innerHTML = "Suivant";
        this.spanNext.setAttribute('class','sro');
        this.next.setAttribute('href','#');
        this.next.setAttribute('class','lightbox__control lightbox__control--next');

        this.prev = document.createElement('a');
        this.spanPrev = document.createElement('span')
        this.spanPrev.innerHTML = "Précédent";
        this.spanPrev.setAttribute('class','sro');
        this.prev.setAttribute('href','#');
        this.prev.setAttribute('class','lightbox__control lightbox__control--prev');

        this.lightbox.appendChild(this.prev);
        this.lightbox.appendChild(this.next);
        this.prev.appendChild(this.spanPrev);
        this.next.appendChild(this.spanNext);
    }

    createImages() {
        // slide container
        this.lightboxContent = document.createElement('div');
        this.lightboxContent.setAttribute('class', 'lightbox__content');
        this.lightbox.appendChild(this.lightboxContent);

        this.slides.forEach(slide => {
            this.lightboxSlides = document.createElement('figure');
            this.lightboxSlides.setAttribute('class', 'lightbox__slides');
            this.lightboxContent.appendChild(this.lightboxSlides);

            this.image = document.createElement('img');
            this.image.setAttribute('src', slide.src);
            this.image.setAttribute('class', 'lightbox__img');
            this.lightboxSlides.appendChild(this.image);
        })
    }
}

if (document.querySelector('.eventGallery')) {
    let lightbox = new OpenLightbox(document.querySelector('.eventGallery'));
}