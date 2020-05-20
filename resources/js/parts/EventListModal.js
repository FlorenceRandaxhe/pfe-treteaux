export default class EventListModal {

    constructor(el) {
        this.el = el;
        this.visible = false;
        this.getElements();
        this.createElements();
        this.setEvents();
    }

    getElements() {
        this.modal = this.el.querySelector('.restoEvent__modal');
    }

    setEvents() {
        this.el.classList.add('restoEvent--js');
        this.el.classList.remove('wrapper');

        this.btn.addEventListener('click', (e) => this.openModal(e));
        this.close.addEventListener('click', (e) => this.closeModal(e));
        this.el.addEventListener('click', (e) => this.eventBodyClick(e));
    }

    createElements() {
        // open modal button
        this.btn = document.createElement('a');
        this.btn.setAttribute('href', '#');
        this.btn.setAttribute('class', 'btn btn--primary');
        this.btn.innerHTML = 'Voir les spectacles concernés';
        document.querySelector('.allRestos__intro').appendChild(this.btn);

        // close btn
        this.close = document.createElement('a');
        this.close.setAttribute('href', '#');
        this.close.setAttribute('class', 'restoEvent__close');
        this.close.innerHTML = 'Fermer';
        this.modal.appendChild(this.close)
    }

    eventBodyClick(e){
        if(!this.visible) return;

        if( this.modal === e.target
            || this.close === e.target
            || this.modal.contains(e.target)
            || this.close.contains(e.target)
        ) {
            return;
        }

        this.closeModal(e);
    }

    openModal(e){
        e.preventDefault();
        this.visible = true;
        this.el.classList.add('restoEvent--active');
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    closeModal(e){
        e.preventDefault();
        this.visible = false;
        this.el.classList.remove('restoEvent--active');
        document.querySelector('body').classList.remove('layout--scrollblock');

    }


}


if (document.querySelector('.restoEvent')) {
    let eventModal = new EventListModal(document.querySelector('.restoEvent'));
}