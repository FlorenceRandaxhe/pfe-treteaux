export default class RestoModal{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.links = this.el.querySelectorAll('.restoCard__link');
        this.modals = this.el.querySelectorAll('.restoInfo');
        this.overlay =this.el.querySelectorAll('.restoInfo__hide')
        this.close =this.el.querySelectorAll('.restoInfo__close')
    }

    setEvents(){
        for (let i = 0; i < this.links.length; i++) {
            this.links[i].addEventListener('click', (e) => this.openModal(e, i))
        }

        for (let i = 0; i < this.overlay.length; i++) {
            this.overlay[i].addEventListener('click', (e) => this.closeModal(e, i))
        }

        for (let i = 0; i < this.close.length; i++) {
            this.close[i].addEventListener('click', (e) => this.closeModal(e, i))
        }

    }

    openModal(e, i){
        e.preventDefault();
        document.querySelector('body').classList.add('layout--scrollblock');
        this.modals[i].classList.add('restoInfo--show');

    }

    closeModal(e, i){
        e.preventDefault();
        this.modals[i].classList.remove('restoInfo--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
    }
}