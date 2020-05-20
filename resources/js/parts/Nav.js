export default class Nav{

    constructor(el) {
        this.isVisible = false;
        this.el = el;
        this.getElements();
        this.createElements();
        this.setEvents();
    }

    getElements(){
        //this.burger = this.el.querySelector('.header__burger');
        this.container = this.el.querySelector('.header__container');
        this.input = this.el.querySelector('.header__input');
        this.isMobile = document.documentElement.clientWidth < 920;
    }

    createElements() {
        this.burger = document.createElement('a');
        this.burger.setAttribute('href', '#');
        this.burger.setAttribute('class', 'header__burger');
        this.span = document.createElement('span');
        this.span.setAttribute('class', 'sro');
        this.span.innerHTML = 'Menu';
        this.line = document.createElement('span');
        this.line.setAttribute('class', 'header__lines');
        this.burger.appendChild(this.span);
        this.burger.appendChild(this.line);
        this.container.appendChild(this.burger);
    }

    setEvents() {
        this.container.removeChild(this.el.querySelector('.header__input'));
        this.container.removeChild(this.el.querySelector('.header__label'));
        this.burger.addEventListener('click', (event) => this.eventToggle(event));
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
    }

}


