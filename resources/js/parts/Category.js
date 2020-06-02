export default class Category{

    constructor(el) {
        this.el = el;
        this.visible = false;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.btn = this.el.querySelector('.btn--next');
        this.alert = this.el.querySelector('.alert');
        this.close = this.el.querySelector('.alert__close');
        this.select = this.el.querySelectorAll('.bCat__select');
    }

    setEvents(){
        this.btn.addEventListener('click', (e) => this.checkCategory(e));
        this.close.addEventListener('click', (e) => this.hideAlert(e))
        this.alert.addEventListener('click', (e) => this.eventBodyClick(e))
    }

    checkCategory(e){
        this.sum = 0;
        for( var i=0 ; i < this.select.length ; i++ ) {
            this.sum += parseInt(this.select[i].value)
        };

        if (this.sum === 0) {
            e.preventDefault();
            this.showAlert();
        } else {
            return;
        }
    }

    showAlert(){
        this.alert.classList.add('alert--show')
        document.querySelector('body').classList.add('layout--scrollblock');

    }

    hideAlert(e) {
        e.preventDefault();
        this.alert.classList.remove('alert--show')
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    eventBodyClick(e){
        if( this.alert.querySelector('.alert__content') === e.target
            || this.close === e.target
            || this.alert.querySelector('.alert__content').contains(e.target)
            || this.close.contains(e.target)
        ) {
            return;
        }
        this.hideAlert(e);
    }
}

if (document.querySelector('.bCat')) {
    let cat = new Category(document.querySelector('.bCat'));
}