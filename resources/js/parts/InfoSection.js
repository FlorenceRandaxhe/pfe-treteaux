export default class InfoSection{

    constructor(el) {
        this.isVisible = false;
        this.el = el;
        this.getElements();
        this.createElements();
        this.setEvents();
    }

    getElements(){
        this.container = this.el.querySelector('.infoSection__container');
    }

    createElements() {
        this.close = document.createElement('a');
        this.close.setAttribute('href', '#');
        this.close.setAttribute('class', 'infoSection__close');
        this.close.innerHTML = 'Fermer';
        this.container.appendChild(this.close);
    }

    setEvents() {
        this.el.classList.add('infoSection--show');
        this.close.addEventListener('click', (event) => this.hide(event));
    }


    hide(){
        event.preventDefault();
        this.el.classList.add('infoSection--hide');
    }

}


if (document.querySelector('.infoSection')) {
    let info = new InfoSection(document.querySelector('.infoSection'));
}