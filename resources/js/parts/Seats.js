export default class Seats{

    constructor(el) {
        this.el = el;
        this.visible = false;
        this.getElements();
        this.focusSeat();
        this.setEvents();
    }

    getElements(){
        this.checkboxDisabled = this.el.querySelectorAll('.seat__checkbox[disabled]');
        this.checkbox = this.el.querySelectorAll('.seat__checkbox:not(:disabled)');
        this.circles = this.el.querySelectorAll('.seat__circle');
        this.takenSeat = this.el.querySelector('.alert__taken');
        this.totalSeat = this.el.querySelector('.alert__total');
        this.closeTaken = this.el.querySelector('.alert__close--taken');
        this.closeTotal = this.el.querySelector('.alert__close--total');
        this.max = this.el.querySelector('.seat').dataset.max;
        this.btn = this.el.querySelector('.bSeats__next');
    }

    setEvents(){
        for (let i = 0; i < this.circles.length; i++) {
            this.circles[i].addEventListener('click', () => this.toggleSeat(this.circles[i]));
            this.circles[i].addEventListener('keyup', (e) => {
                if (e.key == 'Enter' || e.keyCode == 13) return this.toggleSeat(this.circles[i]);
            });
            this.circles[i].addEventListener('click', (e) => {
                if(this.circles[i].hasAttribute('data-occup')){
                    this.showTakenSeatAlert();
                    return;
                }
            })
        }

        for (let i = 0; i < this.checkboxDisabled.length; i++) {
            this.showTakenSeat(this.checkboxDisabled[i])
        }
        this.closeTaken.addEventListener('click', (e) => this.hideAlert(e))
        this.closeTotal.addEventListener('click', (e) => this.hideAlert(e))
        this.totalSeat.addEventListener('click', (e) => this.eventBodyClick(e))
        this.takenSeat.addEventListener('click', (e) => this.eventBodyClick(e))

        for (let i = 0; i < this.checkbox.length; i++) {
            this.showTakenSeat(this.checkbox[i])
        };

        this.btn.addEventListener('click', (e) => this.checkAmoutOfSeats(e))
    }

    toggleSeat(seat){
        for (let i = 0; i < this.checkbox.length; i++) {
            if (this.checkbox[i].id === seat.dataset.seat) {

                if (seat.hasAttribute("data-occup")) {
                    this.showTakenSeatAlert()
                    return;
                };

                this.checkbox[i].checked = !this.checkbox[i].checked;
                this.checkbox[i].toggleAttribute('data-checked');
                seat.classList.toggle('seat__circle--selected');
                seat.toggleAttribute('data-selected');

                this.selected = this.el.querySelectorAll('[data-selected]');
                this.sum = parseInt(this.max) + 1;
                if (this.selected.length == parseInt(this.max) + 1) {
                    this.checkbox[i].checked = !this.checkbox[i].checked;
                    seat.classList.remove('seat__circle--selected');
                    seat.removeAttribute('data-selected');
                    this.showTotalSeatAlert();
                }
            }
        }
    }

    showTakenSeat(checkbox){
        for (let i = 0; i < this.circles.length; i++) {
            if (checkbox.id === this.circles[i].dataset.seat
                && checkbox.disabled && checkbox.checked) {
                this.circles[i].setAttribute('data-occup', 'true')
                this.circles[i].classList.add('seat__circle--occupied')
            }
        }

        for (let i = 0; i < this.circles.length; i++) {
            if (checkbox.id === this.circles[i].dataset.seat
                && checkbox.checked && !checkbox.disabled) {
                this.circles[i].setAttribute('data-selected', 'true')
                this.circles[i].classList.add('seat__circle--selected')
            }
        }
    }

    focusSeat(){
        for (let i = 0; i < this.circles.length; i++) {
            this.circles[i].setAttribute('tabindex', '0');
        }
    }

    checkAmoutOfSeats(e) {

        this.selected = this.el.querySelectorAll('[data-selected]');
        this.sum = parseInt(this.max) + 1;
        if (this.selected.length < parseInt(this.max)) {
            e.preventDefault();
            this.showTotalSeatAlert();
        } else {
            return;
        }
    }

    showTakenSeatAlert(){
        this.takenSeat.classList.add('alert--show');
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    showTotalSeatAlert(){
        this.totalSeat.classList.add('alert--show');
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    hideAlert(e) {
        e.preventDefault();
        this.takenSeat.classList.remove('alert--show');
        this.totalSeat.classList.remove('alert--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    eventBodyClick(e){
        if( this.totalSeat.querySelector('.alert__content') === e.target
            || this.closeTotal === e.target
            || this.totalSeat.querySelector('.alert__content').contains(e.target)
            || this.closeTotal.contains(e.target)
            || this.takenSeat.querySelector('.alert__content') === e.target
            || this.closeTaken === e.target
            || this.takenSeat.querySelector('.alert__content').contains(e.target)
            || this.closeTaken.contains(e.target)
        ) {
            return;
        }
        this.hideAlert(e);
    }
}

if (document.querySelector('.bSeats')) {
    let seats = new Seats(document.querySelector('.bSeats'));
}