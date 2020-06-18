export default class Dropdown{

    constructor(el) {
        this.isVisible = false;
        this.el = el;
        this.getElements();
        this.createElements()
        this.setEvents();
    }

    getElements(){
        this.dropdown = this.el.querySelector('.nav__link--dropdown');
        this.isMobile = document.documentElement.clientWidth < 920;
    }

    createElements() {
        this.back = document.createElement('a');
        this.back.setAttribute('class', 'nav__back');
        this.back.setAttribute('href', '#');
        this.back.innerHTML = 'Retour';
        this.el.querySelector('.nav__list_sub').insertBefore(this.back, this.el.querySelector('.nav__list_sub').querySelector('.nav__item_sub'));
    }

    setEvents() {
        this.el.querySelector('.nav__list_sub').classList.add('nav__list_sub--js')
        this.dropdown.addEventListener('click', (e) => this.dropdownToggle(e))
        this.back.addEventListener('click', (e) => this.dropdownToggle(e))
    }

    dropdownToggle(e){
        e.preventDefault();
        if(!this.isMobile) return;

        if(this.isVisible){
            this.hideNav();
        } else{
            this.showNav();
        }
    }

    hideNav(){
        this.isVisible = false;
        this.el.querySelector('.nav__list_sub').classList.remove('nav__list_sub--show');
    }

    showNav(){
        this.isVisible = true;
        this.el.querySelector('.nav__list_sub').classList.add('nav__list_sub--show');
    }
}


