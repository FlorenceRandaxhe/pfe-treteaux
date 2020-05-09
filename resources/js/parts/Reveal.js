import InView from 'in-view';

export default class Reveal {

    constructor(el) {
        this.el = el;
        this.inview = InView('.hero').on('enter', el => el.classList.add('hero--visible'));
        this.inview = InView('.featuredEvents').on('enter', el => el.classList.add('featuredEvents--visible'));
        this.inview = InView('.reveal').on('enter', el => el.classList.add('reveal--visible'));
        this.update();
    }

    update() {
        this.inview.check();
    }
}
