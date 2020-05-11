export default class Slider{
    constructor(el) {
        this.el = el;
        this.current = 0;
        this.getElements();
        this.createElements();
        this.setEvents();
        this.gotoNum(this.current);
    }

    getElements(){
        this.slides = this.el.querySelectorAll(".featuredEvents__slide");
    }

    createElements(){
        // next & prev buttons
        this.div = document.createElement('div');
        this.div.setAttribute('class', 'featuredEvents__controls')
        this.next = document.createElement('a');
        this.spanNext = document.createElement('span')
        this.spanNext.innerHTML = "Suivant";
        this.spanNext.setAttribute('class','sro');
        this.next.setAttribute('href','#');
        this.next.setAttribute('class','featuredEvents__control featuredEvents__control--next');

        this.prev = document.createElement('a');
        this.spanPrev = document.createElement('span')
        this.spanPrev.innerHTML = "Précédent";
        this.spanPrev.setAttribute('class','sro');
        this.prev.setAttribute('href','#');
        this.prev.setAttribute('class','featuredEvents__control featuredEvents__control--previous');

        this.el.appendChild(this.div)
        this.div.appendChild(this.prev);
        this.div.appendChild(this.next);
        this.prev.appendChild(this.spanPrev);
        this.next.appendChild(this.spanNext);

    }

    setEvents(){
        this.prev.addEventListener('click', (e) => this.prevSlide(e));
        this.next.addEventListener('click', (e) => this.nextSlide(e));
    }

    prevSlide(e) {
        if (e) e.preventDefault();
        let ref = this.gotoPrev();
        this.gotoNum(ref);
    }

    nextSlide(e) {
        if (e) e.preventDefault();
        let ref = this.gotoNext();
        this.gotoNum(ref);
    }

    gotoPrev(){
        let previousRef = this.current - 1;
        if (previousRef < 0) return this.slides.length - 1;
        return previousRef;

    }

    gotoNext(){
        let nextRef = this.current + 1;
        if (nextRef >= this.slides.length) return 0;
        return nextRef;

    }

    gotoNum(number){
        this.current = number;

        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].classList.remove("featuredEvents__slide--active");
        }

        this.slides[this.current].classList.add("featuredEvents__slide--active");

    }

}

if (document.querySelector('.featuredEvents__wrapper')) {
    let slider = new Slider(document.querySelector('.featuredEvents__wrapper'));
}