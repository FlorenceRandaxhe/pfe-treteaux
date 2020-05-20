export default class GalleryScroll{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.createElements();
        this.setEvents();
    }

    getElements() {
        this.container = this.el.querySelector('.eventGallery__content');
    }

    createElements(){
        // next & prev buttons
        this.div = document.createElement('div');
        this.div.setAttribute('class', 'eventGallery__controls')
        this.next = document.createElement('a');
        this.spanNext = document.createElement('span')
        this.spanNext.innerHTML = "Suivant";
        this.spanNext.setAttribute('class','sro');
        this.next.setAttribute('href','#');
        this.next.setAttribute('class','eventGallery__control eventGallery__control--next');

        this.prev = document.createElement('a');
        this.spanPrev = document.createElement('span')
        this.spanPrev.innerHTML = "Précédent";
        this.spanPrev.setAttribute('class','sro');
        this.prev.setAttribute('href','#');
        this.prev.setAttribute('class','eventGallery__control eventGallery__control--prev');

        document.querySelector('.eventGallery').appendChild(this.div)
        this.div.appendChild(this.prev);
        this.div.appendChild(this.next);
        this.prev.appendChild(this.spanPrev);
        this.next.appendChild(this.spanNext);

    }

    setEvents() {
        this.prev.addEventListener('click', (e) => this.scrollLeft(e));
        this.next.addEventListener('click', (e) => this.scrollRight(e));
    }

    scrollLeft(e) {
        e.preventDefault();
        this.container.scrollLeft -= 390;
    }

    scrollRight(e) {
        e.preventDefault();
        this.container.scrollLeft += 390;
    }

}

if (document.querySelector('.eventGallery__container')) {
    let scroll = new GalleryScroll(document.querySelector('.eventGallery__container'));
}