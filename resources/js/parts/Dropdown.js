export default class Dropdown{

    constructor(el) {
        this.isVisible = false;
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.dropdown = this.el.querySelectorAll('.nav__item--dropdown');
        this.isMobile = document.documentElement.clientWidth < 760;
    }

    setEvents() {
        this.el.classList.add('nav--js');
        for (let i = 0; i < this.dropdown.length; i++) {
            this.dropdown[i].querySelector('.nav__link--dropdown').addEventListener('click', (event) => this.dropdownToggle(event, i));
        }
    }

    dropdownToggle(event, i){
        event.preventDefault();
        if(!this.isMobile) return;

        if(this.isVisible){
            this.hideNav(i);
        }

        else{
            this.showNav(i);
        }
    }

    hideNav(i){
        this.isVisible = false;
        this.dropdown[i].querySelector('.nav__list_sub').classList.remove('nav__list_sub--show');
    }

    showNav(i){
        this.isVisible = true;
        this.dropdown[i].querySelector('.nav__list_sub').classList.add('nav__list_sub--show');
    }


}


