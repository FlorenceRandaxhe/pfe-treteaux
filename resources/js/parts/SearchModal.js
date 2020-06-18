export default class SearchModal{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.link = this.el.querySelector('.search__link');
        this.modal = this.el.querySelector('.search__container');
        this.overlay = this.el.querySelector('.search__hide');
        this.close = this.el.querySelector('.search__close');
    }

    setEvents(){
        this.link.addEventListener('click', (event) => this.openModal(event));
        this.overlay.addEventListener('click', (event) => this.closeModal(event));
        this.close.addEventListener('click', (event) => this.closeModal(event));
    }

    openModal(event){
        event.preventDefault();
        document.querySelector('body').classList.add('layout--scrollblock');
        this.modal.classList.add('search__container--show');
    }

    closeModal(event){
        event.preventDefault();
        document.querySelector('body').classList.remove('layout--scrollblock');
        this.modal.classList.remove('search__container--show');
    }
}