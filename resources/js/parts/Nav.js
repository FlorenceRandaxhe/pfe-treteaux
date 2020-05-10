export default class Nav{

    constructor(el) {
        this.isVisible = false;
        this.navVisible = false;
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.burger = this.el.querySelector('.header__burger');
        this.container = this.el.querySelector('.header__container');
        this.input = this.el.querySelector('.header__input');
        this.isMobile = document.documentElement.clientWidth < 760;
    }

    setEvents() {
        this.container.removeChild(this.input);
        this.burger.addEventListener('click', (event) => this.eventToggle(event));
    }

    createElement() {
        this.burger = document.createElement('a');
        this.burger.setAttribute('class', 'header__burger')
    }

    eventToggle(event){
        event.preventDefault();
        if(!this.isMobile) return;

        if(this.isVisible){
            this.hide();
        }

        else{
            this.show();
        }
    }

    show(){
        this.el.classList.add('header--show');
        this.isVisible = true;
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    hide(){
        this.el.classList.remove('header--show');
        this.isVisible = false;
        document.querySelector('body').classList.remove('layout--scrollblock');
        this.el.querySelectorAll
    }

}


