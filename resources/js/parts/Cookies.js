export default class Cookies {

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
        if(!this.hasCookie('treteaux-cookies-accepted')) {
            this.show();
        } else{
            el.classList.remove('cookies--active');
        }

    }

    getElements() {
        this.btn = this.el.querySelector('.cookies__btn');
    }

    setEvents() {
        this.btn.addEventListener('click', (e) => this.eventHide(e));
    }

    eventHide(e){
        e.preventDefault();
        this.createCookie('treteaux-cookies-accepted', 1, 9999);
        this.el.classList.remove('cookies--active');
        this.el.classList.add('cookies--hide');
    }

    show() {
        this.el.classList.add('cookies--active');
    }


    hasCookie(name) {
        let nameEQ = encodeURIComponent(name) + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    createCookie(name, value, days) {
        let expires;

        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

}


if (document.querySelector('.cookies')) {
    let cookies = new Cookies(document.querySelector('.cookies'));
}